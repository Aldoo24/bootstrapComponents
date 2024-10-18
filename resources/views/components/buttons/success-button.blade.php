<button
    {{
        $attributes->merge([
            "class" => "btn btn-success",
            "type" => "button"
        ])
    }}
>
    {{ $slot }}
</button>
