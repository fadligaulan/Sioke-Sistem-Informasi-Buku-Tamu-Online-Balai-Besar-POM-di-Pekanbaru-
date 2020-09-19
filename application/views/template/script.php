</div>
<!-- Classie -->
<script src="<?php echo base_url('assets/js/classie.js'); ?>"></script>
<script>
	var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
	showLeftPush = document.getElementById( 'showLeftPush' ),
	body = document.body;

	showLeftPush.onclick = function() {
		classie.toggle( this, 'active' );
		classie.toggle( body, 'cbp-spmenu-push-toright' );
		classie.toggle( menuLeft, 'cbp-spmenu-open' );
		disableOther( 'showLeftPush' );
	};


	function disableOther( button ) {
		if( button !== 'showLeftPush' ) {
			classie.toggle( showLeftPush, 'disabled' );
		}
	}
</script>
<!-- Bootstrap Core JavaScript --> 

<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/js/dev-loaders.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/dev-layout-default.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.marquee.js'); ?>"></script>
<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.jqcandlestick.min.js'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jqcandlestick.css'); ?>" />

<!--max-plugin-->
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins.js'); ?>"></script>
<!--//max-plugin-->

<!--scrolling js-->
<!--<script src="<?php echo base_url('assets/js/jquery.nicescroll.js'); ?>"></script>-->
<!--<script src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>-->

<!--//scrolling js-->

<!-- charts -->

<!-- circular-pie-chart -->
<script src="<?php echo base_url('assets/js/pie-chart.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">

	$(document).ready(function () {
		$('#demo-pie-1').pieChart({
			barColor: '#68b828',
			trackColor: '#eee',
			lineCap: 'round',
			lineWidth: 8,
			onStep: function (from, to, percent) {
				$(this.element).find('.pie-value').text(Math.round(percent) + '%');
			}
		});

		$('#demo-pie-2').pieChart({
			barColor: '#8465d4',
			trackColor: '#eee',
			lineCap: 'butt',
			lineWidth: 8,
			onStep: function (from, to, percent) {
				$(this.element).find('.pie-value').text(Math.round(percent) + '%');
			}
		});

		$('#demo-pie-3').pieChart({
			barColor: '#457303',
			trackColor: '#eee',
			lineCap: 'square',
			lineWidth: 8,
			onStep: function (from, to, percent) {
				$(this.element).find('.pie-value').text(Math.round(percent) + '%');
			}
		});

		$('#demo-pie-4').pieChart({
			barColor: '#8465d4',
			trackColor: '#eee',
			lineCap: 'round',
			lineWidth: 8,
			rotate: 90,
			onStep: function (from, to, percent) {
				$(this.element).find('.pie-value').text(Math.round(percent) + '%');
			}
		});
	});

</script>
<!-- //circular-pie-chart -->
<script>
	<?php if (isset($pageTitle) && $pageTitle == 'DASHBOARD');?>
	var pieData = [
	{
		value    : <?=$donutChart['sangat_puas']?>,
		color    :"#F38630",
		label    : 'Sangat Puas'
	},
	{
		value    : <?=$donutChart['puas']?>,
		color    : "#E0E4CC",
		label    : 'Puas'
	},
	{
		value    : <?=$donutChart['cukup_puas']?>,
		color    : "#69D2E7",
		label    : 'Cukup Puas'
	},
	{
		value    : <?=$donutChart['kurang_puas']?>,
		color    : "#A52A2A",
		label    : 'Kurang Puas'
	}

	];

	var myPie = new Chart(document.getElementById("canvas").getContext("2d")).Pie(pieData);

</script>
<!-- //charts -->
<!-- animated-column-chart -->
<script src="<?php echo base_url('assets/js/fabochart.js'); ?>"></script>
<script>
	$(document).ready(function () {
		data = {
			'2010' : 300, 
			'2011' : 200,
			'2012' : 100,
			'2013' : 500,
			'2014' : 400,
			'2015' : 200
		};

		$("#chart1").faBoChart({
			time: 500,
			animate: true,
			instantAnimate: true,
			straight: false,
			data: data,
			labelTextColor : "#C0392B",
		});
		$("#chart2").faBoChart({
			time: 2500,
			animate: true,
			data: data,
			straight: true,
			labelTextColor : "#C0392B",
		});
	});
</script>
</body>
</html>