<script type="text/javascript">
	
	$('.carrosel-box ul').anoSlide(
	{
		items: 1,
		speed: 500,
		lazy: true,
		auto: 4000
	});

	$(".zooIt-button").wheelmenu({
  		animation: "fly",
  		animationSpeed: "medium"
	});

	$(".zooIt-link").click(function() {
    // alert("asa");
  	$('.iterative-table-itens').css('display', 'none');
  	$('.iterative-table-contents').css('display', 'block');
  });

  $("#zooIt-link01").click(function() {
  	$('.iterative-table-content01').css('display', 'block');
  });

  $("#zooIt-link02").click(function() {
  	$('.iterative-table-content02').css('display', 'block');
  });

  $("#zooIt-link03").click(function() {
  	$('.iterative-table-content03').css('display', 'block');
  });

  $("#zooIt-link04").click(function() {
  	$('.iterative-table-content04').css('display', 'block');
  });

  $("#zooIt-link05").click(function() {
  	$('.iterative-table-content05').css('display', 'block');
  });

  $(".closeItem").click(function() {
  	$('.iterative-table-contents').css('display', 'none');
  	$('.iterative-table-content').css('display', 'none');
  	$('.iterative-table-itens').css('display', 'block');
  });

</script>