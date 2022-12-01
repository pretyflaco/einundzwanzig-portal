<?php

declare(strict_types=1);

return [
    'accepted'             => ':Attribute onartu beharra dago.',
    'accepted_if'          => 'The :attribute must be accepted when :other is :value.',
    'active_url'           => ':Attribute ez da baliozko URL bat.',
    'after'                => ':Attribute :date osteko data izan behar da.',
    'after_or_equal'       => ':Attribute :date osteko data edo data bera izan behar da.',
    'alpha'                => ':Attribute hizkiak besterik ezin ditu izan.',
    'alpha_dash'           => ':Attribute hizkiak, zenbakiak eta marrak besterik ezin ditu izan.',
    'alpha_num'            => ':Attribute hizkiak eta zenbakiak besterik ezin ditu izan.',
    'array'                => ':Attribute bilduma izan behar da.',
    'attached'             => 'Hau :attribute da dagoeneko erantsita.',
    'before'               => ':Attribute :date aurreko data izan behar da.',
    'before_or_equal'      => ':Attribute :date aurreko data edo data bera izan behar da.',
    'between'              => [
        'array'   => ':Attribute-(e)k :min eta :max arteko elementu kopurua izan behar du.',
        'file'    => ':Attribute-(e)k :min eta :max kilobyte arteko pisua izan behar du.',
        'numeric' => ':Attribute :min eta :max artean egon behar da.',
        'string'  => ':Attribute-(e)k :min eta :max karaktere artean izan behar ditu.',
    ],
    'boolean'              => ':Attribute-(r)en balioa egia edo gezurra izan behar da.',
    'confirmed'            => ':Attribute-(r)en berrespena ez dator bat.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => ':Attribute ez da baliozko data.',
    'date_equals'          => 'The :attribute bat izan behar du data berdina :date.',
    'date_format'          => ':Attribute datak ez du :format formatua.',
    'declined'             => 'The :attribute must be declined.',
    'declined_if'          => 'The :attribute must be declined when :other is :value.',
    'different'            => ':Attribute eta :other ezberdinak izan behar dira.',
    'digits'               => ':Attribute-(e)k :digits digitu eduki behar ditu.',
    'digits_between'       => ':Attribute-(e)k :min eta :max arteko digitu kopurua eduki behar du.',
    'dimensions'           => ':Attribute irudiaren neurriak baliogabeak dira.',
    'distinct'             => ':Attribute-(e)k bikoiztutako balioa dauka.',
    'doesnt_end_with'      => 'The :attribute may not end with one of the following: :values.',
    'doesnt_start_with'    => 'The :attribute may not start with one of the following: :values.',
    'email'                => ':Attribute baliozko helbide elektronikoa izan behar da.',
    'ends_with'            => ':Attribute-(e)k ondorengo balioetako batekin amaitu behar du: :values',
    'enum'                 => 'The selected :attribute is invalid.',
    'exists'               => ':Attribute baliogabea da.',
    'file'                 => ':Attribute fitxategi bat izan behar da.',
    'filled'               => ':Attribute derrigorrezkoa da.',
    'gt'                   => [
        'array'   => ':Attribute-(e)k :value elementu baino gehiago izan behar ditu.',
        'file'    => ':Attribute-(e)k :value kilobyte baino handiagoa izan behar du.',
        'numeric' => ':Attribute-(e)k :value baino handiagoa izan behar du.',
        'string'  => ':Attribute-(e)k :value karaktere baino gehiago izan behar ditu.',
    ],
    'gte'                  => [
        'array'   => ':Attribute-(e)k :value elementu edo gehiago izan behar ditu.',
        'file'    => ':Attribute-(e)k :value kilobyte edo gehiago izan behar ditu.',
        'numeric' => ':Attribute-(e)k :value baino handiagoa edo berdina izan behar du.',
        'string'  => ':Attribute-(e)k :value karaktere edo gehiago izan behar ditu.',
    ],
    'image'                => ':Attribute irudi bat izan behar da.',
    'in'                   => ':Attribute baliogabea da.',
    'in_array'             => ':Attribute ez da existizen :other-(e)n.',
    'integer'              => ':Attribute zenbaki osoa izan behar da.',
    'ip'                   => ':Attribute baliozko IP helbidea izan behar da.',
    'ipv4'                 => ':Attribute baliozko IPv4 helbidea izan behar da.',
    'ipv6'                 => ':Attribute baliozko IPv6 helbidea izan behar da.',
    'json'                 => ':Attribute baliozko JSON karaktere-katea izan behar da.',
    'lowercase'            => 'The :attribute must be lowercase.',
    'lt'                   => [
        'array'   => ':Attribute-(e)k :value elementu baino gutxiago izan behar ditu.',
        'file'    => ':Attribute-(e)k :value kilobyte baino txikiagoa izan behar du.',
        'numeric' => ':Attribute-(e)k :value baino txikiagoa izan behar du.',
        'string'  => ':Attribute-(e)k :value karaktere baino gutxiago izan behar ditu.',
    ],
    'lte'                  => [
        'array'   => ':Attribute-(e)k :value elementu edo gutxiago izan behar ditu.',
        'file'    => ':Attribute-(e)k :value kilobyte edo gutxiago izan behar ditu.',
        'numeric' => ':Attribute-(e)k :value baino txikiagoa edo berdina izan behar du.',
        'string'  => ':Attribute-(e)k :value karaktere edo gutxiago izan behar ditu.',
    ],
    'mac_address'          => 'The :attribute must be a valid MAC address.',
    'max'                  => [
        'array'   => ':Attribute-(e)k ezin du :max elementu baino gehiago eduki.',
        'file'    => ':Attribute ezin da :max kilobyte baino handiagoa izan.',
        'numeric' => ':Attribute ezin da :max baino handiagoa izan.',
        'string'  => ':Attribute-(e)k ezin du :max karaktere baino gehiago eduki.',
    ],
    'max_digits'           => 'The :attribute must not have more than :max digits.',
    'mimes'                => ':Attribute :values motako fitxategia izan behar da.',
    'mimetypes'            => ':Attribute :values motako fitxategia izan behar da.',
    'min'                  => [
        'array'   => ':Attribute-(e)k gutxienez :min elementu izan behar ditu.',
        'file'    => ':Attribute-(e)k gutxienez :min kilobyte izan behar ditu.',
        'numeric' => ':Attribute-(e)k gutxienez :min-(e)ko tamaina izan behar du.',
        'string'  => ':Attribute-(e)k gutxienez :min karaktere izan behar ditu.',
    ],
    'min_digits'           => 'The :attribute must have at least :min digits.',
    'multiple_of'          => 'The :attribute izan behar multiploa :value',
    'not_in'               => ':Attribute baliogabea da.',
    'not_regex'            => ':Attribute formatua baliogabea da.',
    'numeric'              => ':Attribute zenbakizkoa izan behar da.',
    'password'             => [
        'letters'       => 'The :attribute must contain at least one letter.',
        'mixed'         => 'The :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers'       => 'The :attribute must contain at least one number.',
        'symbols'       => 'The :attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present'              => ':Attribute ezin da hutsik egon.',
    'prohibited'           => 'The :attribute eremuan, debekatuta dago.',
    'prohibited_if'        => 'The :attribute eremuan, debekatuta dago denean :other da :value.',
    'prohibited_unless'    => 'The :attribute eremuan, debekatuta dago ezean :other da :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => ':Attribute baliogabea da.',
    'relatable'            => 'Hau :attribute ezingo lotutako baliabide hau.',
    'required'             => ':Attribute derrigorrezkoa da.',
    'required_array_keys'  => 'The :attribute field must contain entries for: :values.',
    'required_if'          => ':Attribute derrigorrezkoa da :other :value denean.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless'      => ':Attribute derrigorrezkoa da :other :values-(e)n egon ezean.',
    'required_with'        => ':Attribute derrigorrezkoa da :values dagoenean.',
    'required_with_all'    => ':Attribute derrigorrezkoa da :values daudenean.',
    'required_without'     => ':Attribute derrigorrezkoa da :values ez dagoenean.',
    'required_without_all' => ':Attribute derrigorrezkoa da :values ez daudenean.',
    'same'                 => ':Attribute eta :other bat etorri behar dira.',
    'size'                 => [
        'array'   => ':Attribute-(e)k :size elementu izan behar ditu.',
        'file'    => ':Attribute-(e)k :size kilobyte izan behar behar ditu.',
        'numeric' => ':Attribute-(e)k :size tamaina izan behar du.',
        'string'  => ':Attribute-(e)k :size karaktere izan behar ditu.',
    ],
    'starts_with'          => ':Attribute-(e)k ondorengo balioetako batekin hasi behar du :values',
    'string'               => ':Attribute karaktere-katea izan behar da.',
    'timezone'             => ':Attribute baliozko ordu-eremua izan behar da.',
    'unique'               => ':Attribute jadanik erregistratua izan da.',
    'uploaded'             => ':Attribute kargatzerakoan huts egin du.',
    'uppercase'            => 'The :attribute must be uppercase.',
    'url'                  => ':Attribute-(r)en formatua baliogabea da.',
    'uuid'                 => ':Attribute-(e)k baliozko UUIDa izan behar du.',
    'attributes'           => [
        'address'                  => 'helbidea',
        'age'                      => 'adina',
        'amount'                   => 'amount',
        'area'                     => 'area',
        'available'                => 'erabilgarria',
        'birthday'                 => 'birthday',
        'body'                     => 'gorputza',
        'city'                     => 'hiria',
        'content'                  => 'edukia',
        'country'                  => 'herrialdea',
        'created_at'               => 'created at',
        'creator'                  => 'creator',
        'current_password'         => 'current password',
        'date'                     => 'data',
        'date_of_birth'            => 'date of birth',
        'day'                      => 'eguna',
        'deleted_at'               => 'deleted at',
        'description'              => 'deskribapena',
        'district'                 => 'district',
        'duration'                 => 'duration',
        'email'                    => 'posta elektronikoa',
        'excerpt'                  => 'pasartea',
        'filter'                   => 'filter',
        'first_name'               => 'izena',
        'gender'                   => 'generoa',
        'group'                    => 'group',
        'hour'                     => 'ordua',
        'image'                    => 'image',
        'last_name'                => 'abizena',
        'lesson'                   => 'lesson',
        'line_address_1'           => 'line address 1',
        'line_address_2'           => 'line address 2',
        'message'                  => 'mezua',
        'middle_name'              => 'middle name',
        'minute'                   => 'minutua',
        'mobile'                   => 'mugikorra',
        'month'                    => 'hilabetea',
        'name'                     => 'izena',
        'national_code'            => 'national code',
        'number'                   => 'number',
        'password'                 => 'pasahitza',
        'password_confirmation'    => 'pasahitzaren berrespena',
        'phone'                    => 'telefonoa',
        'photo'                    => 'photo',
        'postal_code'              => 'postal code',
        'price'                    => 'price',
        'province'                 => 'province',
        'recaptcha_response_field' => 'recaptcha response field',
        'remember'                 => 'remember',
        'restored_at'              => 'restored at',
        'result_text_under_image'  => 'result text under image',
        'role'                     => 'role',
        'second'                   => 'segundoa',
        'sex'                      => 'sexua',
        'short_text'               => 'short text',
        'size'                     => 'neurria',
        'state'                    => 'state',
        'street'                   => 'street',
        'student'                  => 'student',
        'subject'                  => 'gaia',
        'teacher'                  => 'teacher',
        'terms'                    => 'terms',
        'test_description'         => 'test description',
        'test_locale'              => 'test locale',
        'test_name'                => 'test name',
        'text'                     => 'text',
        'time'                     => 'denbora',
        'title'                    => 'izenburua',
        'updated_at'               => 'updated at',
        'username'                 => 'erabiltzailea',
        'year'                     => 'urtea',
    ],
];
