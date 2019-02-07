let axios=require('axios');
$('body').on('click','.delete-bookmark',function(){
var id=$(this).data('id');
axios.delete('/bookmark/'+id).then(function(){
    window.location.reload();
}).catch(function(){
alert('Erreur');
})
});