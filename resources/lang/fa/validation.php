<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'باید با :attribute موافقت شود.',
    'active_url' => ':attribute یک URL مجاز نیست.',
    'after' => ':attribute باید تاریخی بعد از :date باشد.',
    'after_or_equal' => ':attribute باید تاریخی برابر یا بعد از :date باشد.',
    'alpha' => ':attribute تنها می‌تواند شامل حروف باشد.',
    'alpha_dash' => ':attribute تنها می‌تواند شامل حروف، اعداد، خط فاصله یا زیرخط باشد.',
    'alpha_num' => ':attribute تنها می‌تواند شامل حروف و اعداد باشد.',
    'array' => ':attribute باید یک آرایه باشد.',
    'before' => ':attribute باید تاریخی پیش از :date باشد.',
    'before_or_equal' => ':attribute باید تاریخی برابر یا پس از :date باشد.',
    'between' => [
        'numeric' => ':attribute باید مابین :min و :max باشد.',
        'file' => ':attribute باید مابین :min و :max کیلوبایت باشد.',
        'string' => ':attribute باید مابین :min و :max حرف باشد.',
        'array' => ':attribute باید مابین :min و :max مورد داشته باشد.',
    ],
    'boolean' => ':attribute باید درست یا نادرست باشد.',
    'confirmed' => 'تائید :attribute با خودش یکسان نیست.',
    'date' => ':attribute یک تاریخ مجاز نیست.',
    'date_equals' => ':attribute باید تاریخی برابر با :date باشد.',
    'date_format' => ':attribute با قالب :format هم‌خوانی ندارد.',
    'different' => ':attribute و :other باید متفاوت باشند.',
    'digits' => ':attribute باید :digits رقم باشد.',
    'digits_between' => ':attribute باید مابین :min و :max رقم باشد.',
    'dimensions' => 'ابعاد تصویر :attribute مجاز نیست.',
    'distinct' => ':attribute دارای یک مقدار تکراری است.',
    'email' => ':attribute باید یک نشانی ایمیل مجاز باشد.',
    'ends_with' => ':attribute باید با یکی از این مقادیر پایان یابد: :values',
    'exists' => 'مقدار انتخاب شده برای :attribute غیرمجاز است.',
    'file' => ':attribute باید یک فایل باشد.',
    'filled' => ':attribute نمی‌تواند خالی باشد.',
    'gt' => [
        'numeric' => ':attribute باید بیشتر از :value باشد.',
        'file' => ':attribute باید بیشتر از :value کیلوبایت باشد.',
        'string' => ':attribute باید بیشتر از :value حرف باشد.',
        'array' => ':attribute باید بیشتر از :value مورد داشته باشد.',
    ],
    'gte' => [
        'numeric' => ':attribute باید بیشتر یا برابر با :value باشد.',
        'file' => ':attribute باید بیشتر یا برابر با :value کیلوبایت باشد.',
        'string' => ':attribute باید بیشتر یا برابر باl :value حرف باشد.',
        'array' => ':attribute باید :value مورد یا بیشتر داشته باشد.',
    ],
    'image' => 'باید :attribute یک تصویر باشد.',
    'in' => ':attribute انتخاب شده غیرمجاز است.',
    'in_array' => ':attribute در :other وجود ندارد.',
    'integer' => ':attribute باید یک عدد صحیح باشد.',
    'ip' => ':attribute باید یک آدرس آی‌پی مجاز باشد.',
    'ipv4' => ':attribute باید یک آدرس آی‌پی نسخه ۴ مجاز باشد.',
    'ipv6' => ':attribute باید یک آدرس آی‌پی نسخه ۶ مجاز باشد.',
    'json' => ':attribute باید یک رشته JSON مجاز باشد.',
    'lt' => [
        'numeric' => ':attribute باید کمتر از :value باشد.',
        'file' => ':attribute باید کمتر از :value کیلوبایت باشد.',
        'string' => ':attribute باید کمتر از :value حرف باشد.',
        'array' => ':attribute باید کمتر از:value مورد داشته باشد.',
    ],
    'lte' => [
        'numeric' => ':attribute باید کمتر یا برابر با :value باشد.',
        'file' => ':attribute باید کمتر یا برابر با :value کیلوبایت باشد.',
        'string' => ':attribute باید کمتر یا برابر با :value حرف باشد.',
        'array' => ':attribute نباید بیشتر از :value مورد داشته باشد.',
    ],
    'max' => [
        'numeric' => ':attribute نباید بیشتر از :max باشد.',
        'file' => ':attribute نباید بیشتر از :max کیلوبایت باشد.',
        'string' => ':attribute نباید بیشتر از :max حرف باشد.',
        'array' => ':attribute نباید بیشتر از :max مورد داشته باشد.',
    ],
    'mimes' => ':attribute باید فایلی از این انواع باشد: :values.',
    'mimetypes' => ':attribute باید فایلی از این نوع باشد: :values.',
    'min' => [
        'numeric' => ':attribute باید حداقل :min باشد.',
        'file' => ':attribute باید حداقل :min کیلوبایت باشد.',
        'string' => ':attribute باید حداقل :min حرف باشد.',
        'array' => ':attribute باید حداقل :min مورد داشته باشد.',
    ],
    'not_in' => ':attribute انتخاب شده غیرمجاز است.',
    'not_regex' => 'قالب :attribute غیرمجاز است.',
    'numeric' => ':attribute باید یک عدد باشد.',
    'password' => 'کلمه‌عبور اشتباه است.',
    'present' => 'فیلد :attribute باید وجود داشته باشد.',
    'regex' => 'قالب :attribute غیرمجاز است.',
    'required' => 'فیلد :attribute لازم است.',
    'required_if' => 'فیلد :attribute لازم است هنگامی که :other برابر با :value باشد.',
    'required_unless' => 'فیلد :attribute لازم است مگر اینکه :other در :values باشد.',
    'required_with' => 'فیلد :attribute لازم است هنگامی که :values وجود دارد.',
    'required_with_all' => 'فیلد :attribute لازم است هنگامی که :values وجود دارند.',
    'required_without' => 'فیلد :attribute لازم است هنگامی که :values وجود ندارد.',
    'required_without_all' => 'فیلد :attribute لازم است هنگامی که هیچ‌یک از :values وجود ندارد.',
    'same' => ':attribute و :other باید یکسان باشند.',
    'size' => [
        'numeric' => ':attribute باید :size باشد.',
        'file' => ':attribute باید :size کیلوبایت باشد.',
        'string' => ':attribute باید :size حرف باشد.',
        'array' => ':attribute باید :size مورد داشته باشد.',
    ],
    'starts_with' => ':attribute باید با یکی از این مقادیر شروع شود: :values',
    'string' => ':attribute باید یک رشته باشد.',
    'timezone' => ':attribute باید یک منطقه مجاز باشد.',
    'unique' => ':attribute پیش از این گرفته شده است.',
    'uploaded' => ':attribute در بارگذاری با مشکل مواجه شد.',
    'url' => 'قالب :attribute اشتباه است.',
    'uuid' => ':attribute باید یک UUID مجاز باشد.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'email' => 'ایمیل',
        'password' => 'کلمه‌عبور',
        'password_confirmation' => 'تائید کلمه‌عبور',
        'name' => 'نام'
    ],

];
