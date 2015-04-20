@extends('backend.layouts')
@section('css_only_page')
<link rel="stylesheet" href="/backend/assets/plugins/fullcalendar/fullcalendar/fullcalendar.css">
@endsection
@section('javascripts_only_page')
		<script src="/backend/assets/plugins/flot/jquery.flot.js"></script>
		<script src="/backend/assets/plugins/flot/jquery.flot.pie.js"></script>
		<script src="/backend/assets/plugins/flot/jquery.flot.resize.min.js"></script>
		<script src="/backend/assets/plugins/jquery.sparkline/jquery.sparkline.js"></script>
		<script src="/backend/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
		<script src="/backend/assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
		<script src="/backend/assets/plugins/fullcalendar/fullcalendar/fullcalendar.js"></script>
		<script src="/backend/assets/js/index.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Index.init();
			});
		</script>
@endsection