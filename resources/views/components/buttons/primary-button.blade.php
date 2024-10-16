<button type="button"
    {{
        $attributes->merge([
            "class" => "btn btn-primary"
        ])
    }}
>{{ $slot }}</button>
