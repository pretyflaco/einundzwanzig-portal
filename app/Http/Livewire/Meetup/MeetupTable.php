<?php

namespace App\Http\Livewire\Meetup;

use App\Models\Country;
use App\Models\Meetup;
use Livewire\Component;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class MeetupTable extends Component
{
    public Country $country;

    public string $mapEmbedCode = '';

    public function mount()
    {
        $this->mapEmbedCode = '<iframe src="'.url()->route('meetup.embed.countryMap',
                ['country' => $this->country->code]).'" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
    }

    public function filterByMarker($id)
    {
        $meetup = Meetup::with(['city.country'])
                        ->find($id);

        return to_route('meetup.landing', [
            'country' => $meetup->city->country->code,
            'meetup'  => $meetup,
        ]);
    }

    public function render()
    {
        // let markers = [{name: 'VAK', coords: [50.0091294, 9.0371812], status: 'closed', offsets: [0, 2]}];

        return view('livewire.meetup.meetup-table', [
            'markers' => Meetup::query()
                               ->with([
                                   'city.country',
                               ])
                               ->whereHas('city.country',
                                   fn($query) => $query->where('countries.code', $this->country->code))
                               ->get()
                               ->map(fn($meetup) => [
                                   'id'     => $meetup->id,
                                   'name'   => $meetup->name,
                                   'coords' => [$meetup->city->latitude, $meetup->city->longitude],
                               ]),
        ])->layout('layouts.app', [
            'SEOData' => new SEOData(
                title: __('Meetups'),
                description: __('Bitcoiner Meetups are a great way to meet other Bitcoiners in your area. You can learn from each other, share ideas, and have fun!'),
                image: asset('img/screenshot.png')
            ),
        ]);
    }
}
