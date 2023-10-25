<span>
    @props(['type'])

    @php
        switch ($type) {
            case 'success':
                $color='green';
                break;
            
            case 'danger':
                $color='red';
                break;
            case 'warning':
                $color='yellow';
                break;
        }
    @endphp
    <strong>{{ $header }}</strong>
    {{ $slot }}
</span>