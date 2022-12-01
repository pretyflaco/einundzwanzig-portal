<?php

declare(strict_types=1);

return [
    'accepted'             => ':Attribute қабылдануы керек.',
    'accepted_if'          => 'The :attribute must be accepted when :other is :value.',
    'active_url'           => ':Attribute жарамды URL мекенжайы емес.',
    'after'                => ':Attribute мәні :date күнінен кейінгі күн болуы керек.',
    'after_or_equal'       => ':Attribute мәні :date күнінен кейінгі күн немесе тең болуы керек.',
    'alpha'                => ':Attribute тек әріптерден тұруы керек.',
    'alpha_dash'           => ':Attribute тек әріптерден, сандардан және сызықшалардан тұруы керек.',
    'alpha_num'            => ':Attribute тек әріптерден және сандардан тұруы керек.',
    'array'                => ':Attribute жиым болуы керек.',
    'attached'             => 'Бұл нөмір :attribute тіркелген.',
    'before'               => ':Attribute мәні :date күнінен дейінгі күн болуы керек.',
    'before_or_equal'      => ':Attribute мәні :date күнінен дейінгі күн немесе тең болуы керек.',
    'between'              => [
        'array'   => ':Attribute жиымы :min және :max аралығындағы элементтерден тұруы керек.',
        'file'    => ':Attribute көлемі :min және :max килобайт аралығында болуы керек.',
        'numeric' => ':Attribute мәні :min және :max аралығында болуы керек.',
        'string'  => ':Attribute тармағы :min және :max аралығындағы таңбалардан тұруы керек.',
    ],
    'boolean'              => ':Attribute жолы шын немесе жалған мән болуы керек.',
    'confirmed'            => ':Attribute растауы сәйкес емес.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => ':Attribute жарамды күн емес.',
    'date_equals'          => ':Attribute мәні :date күнімен тең болуы керек.',
    'date_format'          => ':Attribute пішімі :format пішіміне сай емес.',
    'declined'             => 'The :attribute must be declined.',
    'declined_if'          => 'The :attribute must be declined when :other is :value.',
    'different'            => ':Attribute және :other әр түрлі болуы керек.',
    'digits'               => ':Attribute мәні :digits сан болуы керек.',
    'digits_between'       => ':Attribute мәні :min және :max аралығындағы сан болуы керек.',
    'dimensions'           => ':Attribute сурет өлшемі жарамсыз.',
    'distinct'             => ':Attribute жолында қосарланған мән бар.',
    'doesnt_end_with'      => 'The :attribute may not end with one of the following: :values.',
    'doesnt_start_with'    => 'The :attribute may not start with one of the following: :values.',
    'email'                => ':Attribute жарамды электрондық пошта мекенжайы болуы керек.',
    'ends_with'            => ':Attribute келесі мәндердің біреуінен аяқталуы керек: :values',
    'enum'                 => 'The selected :attribute is invalid.',
    'exists'               => 'таңдалған :attribute жарамсыз.',
    'file'                 => ':Attribute файл болуы тиіс.',
    'filled'               => ':Attribute жолы толтырылуы керек.',
    'gt'                   => [
        'array'   => ':Attribute мәні :value элементтерден үлкен болуы керек.',
        'file'    => ':Attribute файл өлшемі :value килобайттан үлкен болуы керек.',
        'numeric' => ':Attribute мәні :value үлкен болуы керек.',
        'string'  => ':Attribute мәні :value таңбалардан үлкен болуы керек.',
    ],
    'gte'                  => [
        'array'   => ':Attribute мәні :value элементтерден үлкен немесе тең болуы керек.',
        'file'    => ':Attribute файл өлшемі :value килобайттан үлкен немесе тең болуы керек.',
        'numeric' => ':Attribute мәні :value үлкен немесе тең болуы керек.',
        'string'  => ':Attribute мәні :value таңбалардан үлкен немесе тең болуы керек.',
    ],
    'image'                => ':Attribute кескін болуы керек.',
    'in'                   => 'таңдалған :attribute жарамсыз.',
    'in_array'             => ':Attribute жолы :other ішінде жоқ.',
    'integer'              => ':Attribute бүтін сан болуы керек.',
    'ip'                   => ':Attribute жарамды IP мекенжайы болуы керек.',
    'ipv4'                 => ':Attribute жарамды IPv4 мекенжайы болуы керек.',
    'ipv6'                 => ':Attribute жарамды IPv6 мекенжайы болуы керек.',
    'json'                 => ':Attribute жарамды JSON тармағы болуы керек.',
    'lowercase'            => 'The :attribute must be lowercase.',
    'lt'                   => [
        'array'   => ':Attribute мәні :value элементтерден кіші болуы керек.',
        'file'    => ':Attribute файл өлшемі :value килобайттан кіші болуы керек.',
        'numeric' => ':Attribute мәні :value кіші болуы керек.',
        'string'  => ':Attribute мәні :value таңбалардан кіші болуы керек.',
    ],
    'lte'                  => [
        'array'   => ':Attribute мәні :value элементтерден кіші немесе тең болуы керек.',
        'file'    => ':Attribute файл өлшемі :value килобайттан кіші неменсе тең болуы керек.',
        'numeric' => ':Attribute мәні :value кіші немесе тең болуы керек.',
        'string'  => ':Attribute мәні :value таңбалардан кіші немесе тең болуы керек.',
    ],
    'mac_address'          => 'The :attribute must be a valid MAC address.',
    'max'                  => [
        'array'   => ':Attribute жиымының құрамы :max элементтен аспауы керек.',
        'file'    => ':Attribute мәні :max килобайттан көп болмауы керек.',
        'numeric' => ':Attribute мәні :max мәнінен көп болмауы керек.',
        'string'  => ':Attribute тармағы :max таңбадан ұзын болмауы керек.',
    ],
    'max_digits'           => 'The :attribute must not have more than :max digits.',
    'mimes'                => ':Attribute мынадай файл түрі болуы керек: :values.',
    'mimetypes'            => ':Attribute мынадай файл түрі болуы керек: :values.',
    'min'                  => [
        'array'   => ':Attribute кемінде :min элементтен тұруы керек.',
        'file'    => ':Attribute көлемі кемінде :min килобайт болуы керек.',
        'numeric' => ':Attribute кемінде :min болуы керек.',
        'string'  => ':Attribute кемінде :min таңбадан тұруы керек.',
    ],
    'min_digits'           => 'The :attribute must have at least :min digits.',
    'multiple_of'          => ':Attribute :value еселенуі керек',
    'not_in'               => 'таңдалған :attribute жарамсыз.',
    'not_regex'            => 'таңдалған :attribute форматы жарамсыз.',
    'numeric'              => ':Attribute сан болуы керек.',
    'password'             => [
        'letters'       => 'The :attribute must contain at least one letter.',
        'mixed'         => 'The :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers'       => 'The :attribute must contain at least one number.',
        'symbols'       => 'The :attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present'              => ':Attribute болуы керек.',
    'prohibited'           => ':Attribute өрісіне тыйым салынады.',
    'prohibited_if'        => ':Attribute өрісіне :other :value болған кезде тыйым салынады.',
    'prohibited_unless'    => ':Attribute өрісіне тыйым салынады, егер тек :other :values-де болмаса.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => ':Attribute пішімі жарамсыз.',
    'relatable'            => 'Бұл :attribute осы ресурсқа байланысты болмауы мүмкін.',
    'required'             => ':Attribute жолы толтырылуы керек.',
    'required_array_keys'  => 'The :attribute field must contain entries for: :values.',
    'required_if'          => ':Attribute жолы :other мәні :value болған кезде толтырылуы керек.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless'      => ':Attribute жолы :other мәні :values ішінде болмағанда толтырылуы керек.',
    'required_with'        => ':Attribute жолы :values болғанда толтырылуы керек.',
    'required_with_all'    => ':Attribute жолы :values болғанда толтырылуы керек.',
    'required_without'     => ':Attribute жолы :values болмағанда толтырылуы керек.',
    'required_without_all' => ':Attribute жолы ешбір :values болмағанда толтырылуы керек.',
    'same'                 => ':Attribute және :other сәйкес болуы керек.',
    'size'                 => [
        'array'   => ':Attribute жиымы :size элементтен тұруы керек.',
        'file'    => ':Attribute көлемі :size килобайт болуы керек.',
        'numeric' => ':Attribute көлемі :size болуы керек.',
        'string'  => ':Attribute тармағы :size таңбадан тұруы керек.',
    ],
    'starts_with'          => ':Attribute келесі мәндердің біреуінен басталуы керек: :values',
    'string'               => ':Attribute тармақ болуы керек.',
    'timezone'             => ':Attribute жарамды аймақ болуы керек.',
    'unique'               => ':Attribute бұрын алынған.',
    'uploaded'             => ':Attribute жүктелуі сәтсіз аяқталды.',
    'uppercase'            => 'The :attribute must be uppercase.',
    'url'                  => ':Attribute пішімі жарамсыз.',
    'uuid'                 => ':Attribute мәні жарамды UUID болуы керек.',
    'attributes'           => [
        'address'                  => 'мекенжай',
        'age'                      => 'жасы',
        'amount'                   => 'amount',
        'area'                     => 'area',
        'available'                => 'қолжетімді',
        'birthday'                 => 'birthday',
        'body'                     => 'body',
        'city'                     => 'қала',
        'content'                  => 'контент',
        'country'                  => 'ел',
        'created_at'               => 'created at',
        'creator'                  => 'creator',
        'current_password'         => 'current password',
        'date'                     => 'күні',
        'date_of_birth'            => 'date of birth',
        'day'                      => 'күн',
        'deleted_at'               => 'deleted at',
        'description'              => 'сипаттамасы',
        'district'                 => 'district',
        'duration'                 => 'duration',
        'email'                    => 'e-mail мекенжай',
        'excerpt'                  => 'үзінді',
        'filter'                   => 'filter',
        'first_name'               => 'аты',
        'gender'                   => 'жынысы',
        'group'                    => 'group',
        'hour'                     => 'сағат',
        'image'                    => 'image',
        'last_name'                => 'тегі',
        'lesson'                   => 'lesson',
        'line_address_1'           => 'line address 1',
        'line_address_2'           => 'line address 2',
        'message'                  => 'message',
        'middle_name'              => 'middle name',
        'minute'                   => 'минут',
        'mobile'                   => 'моб. нөмір',
        'month'                    => 'ай',
        'name'                     => 'аты',
        'national_code'            => 'national code',
        'number'                   => 'number',
        'password'                 => 'құпиясөз',
        'password_confirmation'    => 'құпиясөзді растау',
        'phone'                    => 'телефон',
        'photo'                    => 'photo',
        'postal_code'              => 'postal code',
        'price'                    => 'price',
        'province'                 => 'province',
        'recaptcha_response_field' => 'recaptcha response field',
        'remember'                 => 'remember',
        'restored_at'              => 'restored at',
        'result_text_under_image'  => 'result text under image',
        'role'                     => 'role',
        'second'                   => 'секунд',
        'sex'                      => 'жынысы',
        'short_text'               => 'short text',
        'size'                     => 'көлемі',
        'state'                    => 'state',
        'street'                   => 'street',
        'student'                  => 'student',
        'subject'                  => 'subject',
        'teacher'                  => 'teacher',
        'terms'                    => 'terms',
        'test_description'         => 'test description',
        'test_locale'              => 'test locale',
        'test_name'                => 'test name',
        'text'                     => 'text',
        'time'                     => 'уақыт',
        'title'                    => 'атауы',
        'updated_at'               => 'updated at',
        'username'                 => 'лақап аты',
        'year'                     => 'жыл',
    ],
];
