$(function(){
	
	// Parametros para el combo1
   $("#combo1").change(function () {
   		$("#combo1 option:selected").each(function(){
			//alert($(this).val());
				opcionSelect=$(this).val();
				$.post("combo1.php", {elegido:opcionSelect}, rellenarCombo2);	
				
				function rellenarCombo2(datos){
					$("#combo2").empty();
					$("#combo3").empty();
					//(datos) devuelve el codigo html con las opciones de combo a cargar...lo recibiremos de la siguiente manera, por ejemplo:
					// ('<option value="op2_1">Option1</option><option value="op2_2">Option2</option><option value="op2_3">Option3</option>') 
					//y lo inyectaremos al arbol del DOM con append.
					$("#combo2").append(datos);
					
				}
        });
   })
   
	// Parametros para el combo2
	$("#combo2").change(function () {
   		$("#combo2 option:selected").each(function(){
				opcionSelect=$(this).val();
				$.post("combo2.php", {elegido:opcionSelect}, rellenarCombo3);
				
				function rellenarCombo3(datos){
					$("#combo3").empty();
					$("#combo3").append(datos);
				}			
        });
   })
});