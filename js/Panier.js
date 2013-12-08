/**
 * @author SAAD
 */
var url = "includes/mvc/panier.php";

$(function(){
	
	$(".btn").click(function(){
		var id=$("#iid").val();
		$.post(url,{action:"addPanier",id:id},function(data){
			
			if(data=="oui"){
				//getPanier();
				alert(data);
			}else{
				alert(data);
			}
			
		});
		alert("ok");
		return false;
		
	});
	
});


function getPanier(){
	$.post(url,{action:"getPanier"},function(data){
		
		$(".cartbubble").empty().append(data);
		
	});
		return false;
	
}
