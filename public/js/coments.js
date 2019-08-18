function onClickAddItem() {
    // console.log("yeee");
    var jaunsIeraksts = panemtJaunuIerakstu();
    ieliktIerakstu(jaunsIeraksts);
}

function panemtJaunuIerakstu() {
    var ievadesLauks = document.getElementById("input-text");
    var teksts = ievadesLauks.value;
    ievadesLauks.value = "";
    console.log(teksts);
    return teksts;
    console.log(teksts);
}

function ieliktIerakstu(teksts){
    var textakonteineris = document.getElementById("todo-list");
    textakonteineris.innerHTML = '<li>' + teksts + '<button onclick="izdzestIerakstu(this)" type"button" class="btn btn-outline-danger mr-2 float-right">x</button></li>' + textakonteineris.innerHTML; 
}

function izdzestIerakstu(poga){
    //poga -> li     -> ul
poga.parentNode.parentNode.removeChild(poga.parentNode);
}


$(document).ready(function(){
	$(document).on("click", "#button-addon2", function(){
		var toDoList = $("input[name='aasd']").val();
		$("<button type=\"button\" class=\"btn btn-sm btn-outline-danger dzest\">x</button> " + toDoList + "</li>").prependTo("#todo-list-2");
		$("input[name='aasd']").val("");		
	});
	
	$(document).on("click", ".dzest", function(){
		$(this).parent().remove();
	});

});



























// ar enter ievadid 

var input = document.getElementById("input-text");
input.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        document.getElementById("button-addon2").click();
    }
});