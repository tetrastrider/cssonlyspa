$(document).ready(function(){

        var lock=document.URL;
        lock = lock.split("/");
            
    if(window.location.hash){ 
            lock=lock[4]
            lock =lock.substring(1); 
            $(".l"+lock).addClass('bactivo');
         }else{ 
             $(".lnoticias").addClass('bactivo');
             $("#noticias").addClass('enable');
}
    $(function(){
        $("nav a").on('click',function(e){
         

            $("nav a").add('.col').removeClass('bactivo')
            $("#noticias").removeClass('enable');
            var $this=$(this);
            var link=$this.attr('href');
            $($this).addClass('bactivo');
            $("body").animate({ scrollTop: 1 },1);
        });
});
});

/*************ajax cambio******************************************************/
function from(){
var url = $('input[name="url"]').val();
var limite = $('select[name="limit"]').val();
var orden = $('select[name="cambio"]').val();
var categoria = $('select[name="categoria"]').val();
var pagina = $('input[name="pagina"]').val();
var azar=parseInt(Math.random()*99999999);
var direcion="?pagina="+pagina+"&orden="+orden+"&limite="+limite+"&categoria="+categoria+"&r="+azar+"#noticias";   
    $.ajax({
              url:url,
              type: "GET",
              cache:false,
              data:direcion,
              dataType: "html"
        }).done(function(re) { $('.fix').html(re); });

}