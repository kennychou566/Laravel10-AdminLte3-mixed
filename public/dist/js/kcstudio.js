$(document).ready(function () {
    $('.alert-msg').delay(3600).slideToggle('slow');
});
function ShowDialog(a) {
    str = '<div class="modal-header">';
    str += '<h4 class="modal-title">Delete</h4>';
    str += '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    str += '</div>';
    str += '<div class="modal-body">';
    str += '<p>Sure delete this record?!</p>';
    str += '</div>';
    str += '<div class="modal-footer">';
    str += '<a href="javascript:void(0)" class="btn btn-default" data-dismiss="modal">Cancel</a>';
    str += '<a href="javascript:Del(' + a + ');" class="btn btn-primary" >Confirmed</a>';
    str += '</div>';
    $('.modal-content').html(str);

    $('#myModal').modal('show');
}
function Del(a) {
    t = $("meta[name=_token]").attr('content');
    $.post("admins/" + a, {_token: t, _method: 'DELETE'}, function (res) {
        if (res.status == 'ok') {
            location.reload();
        } else {
            ModalMsg('error', res.status);
        }
    }, "json");
}
function ModalMsg(a,b){
    a=(a==='error')?'ErrorMsg':'InformMsg';
    str='<div class="modal-header">';
    str+='<h3>'+a+'</h3>';
    str+='<button type="button" class="close" data-dismiss="modal" >×</button>';
    str+='</div>';
    str+='<div class="modal-body">';
    str+='<label class="text-danger"><i class="fa fa-info fa-2x"></i>&nbsp;'+b+'</label>';
    str+='</div>';
    str +='<div class="modal-footer">';
    str +='<a href="javascript:void(0)" class="btn btn-default" data-dismiss="modal">I Got!!</a>';
    str += '</div>';
    $('.modal-content').html(str);
    $('#myModal').modal('show');
}