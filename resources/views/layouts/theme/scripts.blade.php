<!-- Boxicons core JavaScript-->
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

<!-- Bootstrap core JavaScript-->
<script src="{{asset ('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset ('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset ('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset ('js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{asset ('vendor/chart.js/Chart.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset ('js/demo/chart-area-demo.js')}}"></script>
<script src="{{asset ('js/demo/chart-pie-demo.js')}}"></script>
<script>
    function noty(msg,option = 1){
        Snackbar.show({
            text:msg.toJpperCase(),
            actionText: 'FECHAR',
            actionTextColor: 'afff',
            backgroundColor: option == 1 ? '#3b3f5c' : '#e7515a',
            pos: 'top-right'
        })
    }

</script>