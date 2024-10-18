<button
    {{
        $attributes->merge([
            "class" => "btn btn-danger",
            "type" => "button"
        ])
    }}
>
    {{ $slot }}
</button>
