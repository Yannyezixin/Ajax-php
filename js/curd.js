$(document).ready(function() {
    $('#form').submit(function() {
        $.post('./curd/ajaxPost.php',$('#form').serialize(), function() {
            $('#messages').load(location.href);
        });

        return false;
    });

    $('.update').click(function() {
        var item = $(this).parent();
        var id = $(this).attr('rel');
        var name = $('.row' + id + ' .name').val();
        var phone = $('.row' + id + ' .phone').val();
        var address = $('.row' + id + ' .address').val();

        $.post('./curd/ajaxUpdate.php', {
            'id' : id,
            'name' : name,
            'phone' : phone,
            'address' : address
        });
    });

    $('.delete').click(function() {
        var item = $(this).parent();
        var id = $(this).attr('rel');

        $.post('./curd/ajaxDelete.php', {
            'id' : id
        }, function() {
            $(item).hide('slow', function() {
                $(item).remove();
            });
        });
    })
});
