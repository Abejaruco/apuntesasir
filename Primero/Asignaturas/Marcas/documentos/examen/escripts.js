$(document).ready(function(){
	function azul_verde(){
		$("#barra_horizontal_verde").animate({"width":"50px"},5000);
		$("#barra_horizontal_azul").animate({"width":"954px"},5000);
		$("#barra_horizontal2_verde").animate({"width":"954px"},5000);
		$("#barra_horizontal2_azul").animate({"width":"50px"},5000);
	}
	function verde_azul(){
		$("#barra_horizontal_verde").animate({"width":"954px"},5000);
		$("#barra_horizontal_azul").animate({"width":"50px"},5000);
		$("#barra_horizontal2_verde").animate({"width":"50px"},5000);
		$("#barra_horizontal2_azul").animate({"width":"954px"},5000);
	}
	function pelea(){
		setTimeout(function() {
			azul_verde();
			verde_azul();
		}, 0001);
		setTimeout(function() {
			pelea();
		},10000);
	}
	pelea();
	function activar_pc(){
		$("#pc").css({"height":"65px","border-radius": "28px 28px 0px 0px","-moz-border-radius": "28px 28px 0px 0px","-webkit-border-radius": "28px 28px 0px 0px"});
		$("#consolas").css({"height":"60px","border-radius": "28px 28px 28px 28px","-moz-border-radius": "28px 28px 28px 28px","-webkit-border-radius": "28px 28px 28px 28px"});
		$("#moviles").css({"height":"60px","border-radius": "28px 28px 28px 28px","-moz-border-radius": "28px 28px 28px 28px","-webkit-border-radius": "28px 28px 28px 28px"});
	}
	function activar_consolas(){
		$("#pc").css({"height":"60px","border-radius": "28px 28px 28px 28px","-moz-border-radius": "28px 28px 28px 28px","-webkit-border-radius": "28px 28px 28px 28px"});
		$("#consolas").css({"height":"65px","border-radius": "28px 28px 0px 0px","-moz-border-radius": "28px 28px 0px 0px","-webkit-border-radius": "28px 28px 0px 0px"});
		$("#moviles").css({"height":"60px","border-radius": "28px 28px 28px 28px","-moz-border-radius": "28px 28px 28px 28px","-webkit-border-radius": "28px 28px 28px 28px"});
	}
	function activar_moviles(){
		$("#pc").css({"height":"60px","border-radius": "28px 28px 28px 28px","-moz-border-radius": "28px 28px 28px 28px","-webkit-border-radius": "28px 28px 28px 28px"});
		$("#consolas").css({"height":"60px","border-radius": "28px 28px 28px 28px","-moz-border-radius": "28px 28px 28px 28px","-webkit-border-radius": "28px 28px 28px 28px"});
		$("#moviles").css({"height":"65px","border-radius": "28px 28px 0px 0px","-moz-border-radius": "28px 28px 0px 0px","-webkit-border-radius": "28px 28px 0px 0px"});
	}
	$("#windows").click(function() {
		activar_pc();
		$("#subtitulo_texto").html("Windows");
	});
	$("#linux").click(function() {
		activar_pc();
		$("#subtitulo_texto").html("Linux");
	});
	$("#mac").click(function() {
		activar_pc();
		$("#subtitulo_texto").html("Mac");
	});
	$("#nintendo").click(function() {
		activar_consolas();
		$("#subtitulo_texto").html("Nintendo");
	});
	$("#sony").click(function() {
		activar_consolas();
		$("#subtitulo_texto").html("Sony");
	});
	$("#microsoft").click(function() {
		activar_consolas();
		$("#subtitulo_texto").html("Microsoft");
	});
	$("#android").click(function() {
		activar_consolas();
		$("#subtitulo_texto").html("Android");
	});
	$("#android_movil").click(function() {
		activar_moviles();
		$("#subtitulo_texto").html("Android");
	});
	$("#ios").click(function() {
		activar_moviles();
		$("#subtitulo_texto").html("IOS");
	});
	$("#windows_movil").click(function() {
		activar_moviles();
		$("#subtitulo_texto").html("Windows");
	});
	$("#subtitulo_texto").html("Pong");
	$("#ventana").attr("src","pong.html");
	$("#pc").hover(function(){
		//anterior = $("#ventana").attr("src");
		//$("#ventana").attr("src","");
		mostrar_mosaico_windows();
		$("#pc ul").show();
		setTimeout(function() {
			$("#windows").show();
		}, 200);
		setTimeout(function() {
			$("#linux").show();
		}, 400);
		setTimeout(function() {
			$("#mac").show();
		}, 600);
		}
		,function() {
			ocultar_mosaico_windows();
			setTimeout(function() {
				$("#mac").hide();
			}, 200);
			setTimeout(function() {
				$("#linux").hide();
			}, 400);
			setTimeout(function() {
				$("#windows").hide();
			}, 600);
			setTimeout(function() {
				$("#pc ul").hide();
			}, 800);
			//setTimeout(function() {
			//	$("#ventana").attr("src",anterior);
			//}, 1000);
			
			/*
		$("#mac").hide();
		$("#linux").hide();
		$("#windows").hide();
		$("#pc ul").hide();
		* */
		}
	);
	$("#consolas").hover(function(){
		mostrar_mosaico_consolas();
		$("#consolas ul").show();
		setTimeout(function() {
			$("#nintendo").show();
		}, 200);
		setTimeout(function() {
			$("#sony").show();
		}, 400);
		setTimeout(function() {
			$("#microsoft").show();
		}, 600);
		setTimeout(function() {
			$("#android").show();
		}, 800);
		}
		,function() {
			ocultar_mosaico_consolas();
			setTimeout(function() {
				$("#android").hide();
			}, 200);
			setTimeout(function() {
				$("#microsoft").hide();
			}, 400);
			setTimeout(function() {
				$("#sony").hide();
			}, 600);
			setTimeout(function() {
				$("#nintendo").hide();
			}, 800);
			setTimeout(function() {
				$("#consolas ul").hide();
			}, 1000);
		}
	);
	$("#moviles").hover(function(){
		mostrar_mosaico_moviles();
		$("#moviles ul").show();
		setTimeout(function() {
			$("#android_movil").show();
		}, 200);
		setTimeout(function() {
			$("#ios").show();
		}, 400);
		setTimeout(function() {
			$("#windows_movil").show();
		}, 600);
		}
		,function() {
			ocultar_mosaico_moviles();
			setTimeout(function() {
				$("#windows_movil").hide();
			}, 200);
			setTimeout(function() {
				$("#ios").hide();
			}, 400);
			setTimeout(function() {
				$("#android_movil").hide();
			}, 600);
			setTimeout(function() {
				$("#moviles ul").hide();
			}, 800);
		}
	);
	function mostrar_mosaico_windows(){
		$("#mosaico_windows").show();
		setTimeout(function() {
			$("#imagen_windows").animate({"left":"0px"},1000, "linear");
		},0);
		setTimeout(function(){
			$("#imagen_linux").animate({"left":"270px"},1000,"linear");
		},1000);
		setTimeout(function(){
			$("#imagen_mac").animate({"left":"540px"},1000,"linear");
		},2000);
	}
	function ocultar_mosaico_windows(){
		setTimeout(function() {
			$("#imagen_mac").animate({"left":"1520px"},1000,"linear");
		},0);
		setTimeout(function(){
			$("#imagen_linux").animate({"left":"1260px"},1000,"linear");
		},1000);
		setTimeout(function(){
			$("#imagen_windows").animate({"left":"1000px"},1000, "linear");
		},2000);
		setTimeout(function(){
			$("#mosaico_windows").hide();
		},3000);	
	}
	function mostrar_mosaico_consolas(){
		$("#mosaico_consolas").show();
		setTimeout(function() {
			$("#imagen_nintendo").animate({"left":"0px"},1000, "linear");
		},0);
		setTimeout(function(){
			$("#imagen_sony").animate({"left":"200px"},1000,"linear");
		},1000);
		setTimeout(function(){
			$("#imagen_microsoft").animate({"left":"405px"},1000,"linear");
		},2000);
		setTimeout(function(){
			$("#imagen_android").animate({"left":"605px"},1000,"linear");
		},3000);
	}
	function ocultar_mosaico_consolas(){
		setTimeout(function() {
			$("#imagen_android").animate({"left":"1600px"},1000,"linear");
		},0);
		setTimeout(function(){
			$("#imagen_microsoft").animate({"left":"1400px"},1000,"linear");
		},1000);
		setTimeout(function(){
			$("#imagen_sony").animate({"left":"1200px"},1000, "linear");
		},2000);
		setTimeout(function(){
			$("#imagen_nintendo").animate({"left":"1000px"},1000, "linear");
		},3000);
		setTimeout(function(){
			$("#mosaico_consolas").hide();
		},4000);	
	}
	function mostrar_mosaico_moviles(){
		$("#mosaico_moviles").show();
		setTimeout(function() {
			$("#imagen_android_movil").animate({"left":"0px"},1000, "linear");
		},0);
		setTimeout(function(){
			$("#imagen_ios").animate({"left":"270px"},1000,"linear");
		},1000);
		setTimeout(function(){
			$("#imagen_windows_movil").animate({"left":"540px"},1000,"linear");
		},2000);
	}
	function ocultar_mosaico_moviles(){
		setTimeout(function() {
			$("#imagen_windows_movil").animate({"left":"1520px"},1000,"linear");
		},0);
		setTimeout(function(){
			$("#imagen_ios").animate({"left":"1260px"},1000,"linear");
		},1000);
		setTimeout(function(){
			$("#imagen_android_movil").animate({"left":"1000px"},1000, "linear");
		},2000);
		setTimeout(function(){
			$("#mosaico_moviles").hide();
		},3000);	
	}
});
