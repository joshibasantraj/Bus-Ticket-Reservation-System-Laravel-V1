<footer class="footer">
     <p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Fri: 10:00 am - 12:00 am</p>
                <p>&copy; Copyright {{date('Y')}} Mahakali Yatayat Bus <br /></p>
  </footer>
<script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_dc74e0fd57cb46cd93832aee0a390234",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
                ],
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({amount: 1000});
        }
    </script>
</body>
</html>

<script type="text/javascript" src="{{ asset('assets/frontend/xres/js/saslideshow.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontend/xres/js/slideshow.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery-1.5.min.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ asset('assets/frontend/vallenato/vallenato.js') }}" type="text/javascript" charset="utf-8"></script>
<!-- <script type="text/javascript" src="{{ asset('assets/frontend/js/datepicker.js') }}"></script> -->



<script type="text/javascript">
		$("#slideshow > div:gt(0)").hide();

		setInterval(function() { 
		  $('#slideshow > div:first')
			.fadeOut(1000)
			.next()
			.fadeIn(1000)
			.end()
			.appendTo('#slideshow');
		},  3000);
    </script>
    <!-- <script type="text/javascript">
                    function makeTwoChars(inp) {
                            return String(inp).length < 2 ? "0" + inp : inp;
                    }

                    function initialiseInputs() {
                        
                            document.getElementById("sd").value = "";
                            document.getElementById("ed").value = "";

                            datePickerController.addEvent(document.getElementById("sd"), "change", setReservationDates);
                    }

                    var initAttempts = 0;

                    function setReservationDates(e) {
                        
                            try {
                                    var sd = datePickerController.getDatePicker("sd");
                                    var ed = datePickerController.getDatePicker("ed");
                            } catch (err) {
                                    if(initAttempts++ < 10) setTimeout("setReservationDates()", 50);
                                    return;
                            }

                        
                            var dt = datePickerController.dateFormat(this.value, sd.format.charAt(0) == "m");

                    
                            if(dt == 0) return;

                        
                            var edv = datePickerController.dateFormat(document.getElementById("ed").value, ed.format.charAt(0) == "m");

                            
                            ed.setRangeLow( dt );
                            
                            
                            if(edv < dt) {
                                    document.getElementById("ed").value = "";
                            }
                    }

                    function removeInputEvents() {
                            
                            datePickerController.removeEvent(document.getElementById("sd"), "change", setReservationDates);
                    }

                    datePickerController.addEvent(window, 'load', initialiseInputs);
                    datePickerController.addEvent(window, 'unload', removeInputEvents);
    </script>  -->

 
    <script>
    function fetchRecord(){
             var from=$('#from').val();
             var to=$('#to').val();
             var date=$('#date').val();
             $.ajax({
                url: "{{ route('display-bus') }}",
                type: "post",
                data: {
                    _token: "{{ csrf_token() }}",
                    from: from,
                    to: to,
                    date: date
                },
                success: function(data,success){
                  $('#table').html(data);
                }
             });
    }
</script>

@yield('script')
