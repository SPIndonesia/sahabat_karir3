<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-DfZKkgKs3LGO0v4K"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
</head>

<body>
    <button id="pay-button">Pay!</button>
    <form action="/pembayaran" method="post" id="submit_form">
        @csrf
        <input type="hidden" name="json" id="json_callback">
    </form>


    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */

                    send_response_to_form(result);
                }
                , onPending: function(result) {
                    /* You may add your own implementation here */

                    send_response_to_form(result);
                }
                , onError: function(result) {
                    /* You may add your own implementation here */

                    send_response_to_form(result);
                }
                , onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });

        function send_response_to_form(result) {
            document.getElementById('json_callback').value = JSON.stringify(result);
            document.getElementById('submit_form').submit()
        }
    </script>
</body>

</html>