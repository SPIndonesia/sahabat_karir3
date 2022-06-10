@extends('templates.templateSK')


@section('content')

<section id="halaman-landing">

    <!-- --------------- Gabung Bersama Kami --------------- -->
    <div class="konten gabung-bersama-kami" id="kelas">
        <div class="pembungkus-judul">
            <h1 class="judul">{{$data_paket->nama}}</h1>
            <h3 class="sub-judul">Rp {{$data_paket->harga}}</h3>
            <button class="btn btn-primary" id="pay-button">
                pay
            </button>
            <form action="{{route('payPost',$data_paket->id_paket)}}" id="submit_form" method="post">
                @csrf
                <input type="hidden" name="json" id="json_callback">
            </form>
        </div>
    </div>

</section>
<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function() {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        snap.pay('{{$snap_token}}', {
            onSuccess: function(result) {
                /* You may add your own implementation here */
                console.log(result)
                send_response_to_form(result)
            },
            onPending: function(result) {
                /* You may add your own implementation here */
                console.log(result)
                send_response_to_form(result)
            },
            onError: function(result) {
                /* You may add your own implementation here */
                console.log(result)
                send_response_to_form(result)
            },
            onClose: function(result) {
                /* You may add your own implementation here */
                console.log(result)
                alert('you closed the popup without finishing the payment');
            }
        })

        document.querySelector('header').style.zIndex = 0
    });

    function send_response_to_form(result) {
        document.getElementById('json_callback').value = JSON.stringify(result);
        document.getElementById('submit_form').submit();
    }
</script>
@endsection