<table
        {{
            $attributes->merge([
                "class" => "table m-0"
            ])
        }}
>
    <thead class="bg-light">
    {{ $thead ?? '' }}
    </thead>
    <tbody>
    {{ $tbody ?? '' }}
    </tbody>
    <tfoot>
    {{ $tfoot ?? '' }}
    </tfoot>
</table>
