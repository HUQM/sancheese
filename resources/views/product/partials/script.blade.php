{{-- <script>
    //DATATABLE
    var table=null;
    table = $('#users_table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{route('users.showTableU')}}",
        "columns": [
            {data: 'name'},
            {data: 'code'},
            {data: 'email'},
            {data: 'btn'}
        ],
        "language": {
      "info": "_TOTAL_ registros",
      "search": "Buscar",
      "paginate": {
        "next": "Siguiente",
        "previous": "Anterior",
      },
      "lengthMenu": 'Mostrar <select>'+
          '<option value="10">10</option>'+
          '<option value="30">30</option>'+
          '<option value="-1">Todos</option>'+
          '</select> registros',
      "loadingRecords": "Cargando...",
      "processing": "Procesando...",
      "emptyTable": "No hay datos",
      "zeroRecords": "No hay coincidencias",
      "infoEmpty": "",
      "infoFiltered": ""
    }
    });
    
    //EDIT
    $('#edit').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var id = button.data('iduser')
        var name = button.data('name')
        var email = button.data('email')
        var password = button.data('password')
        var user_type = button.data('user_type')
        var code = button.data('code')
        var name = button.data('name')
        var image = button.data('image')
        console.log(name);
        var appointment = button.data('appointment')
        var contract = button.data('contract')
        user_type = toType(user_type);
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #email').val(email);
        modal.find('.modal-body #password').val(password);
        modal.find('.modal-body #user_type').val(user_type);
        modal.find('.modal-body #code').val(code);
        modal.find('.modal-body #user_id').val(name);
        modal.find('.modal-body #appointment').val(appointment);
        modal.find('.modal-body #contract').val(contract);
        modal.find('.modal-body #image').val(image);
    });
    
    
    function toType(type) {
        if(type == "Director o Coordinador")
          type = 0;
        else if(type == "Jefe de departamento")
          type = 1;
          else if(type == "Profesor")
            type = 2;
    
        return type;
    }
    
    //DELETE
    $('body').delegate('.status-user','click',function(){
            id_user = $(this).attr('id_user');
            var csrf_token=$('meta[name="csrf-token"]').attr('content');
            swal({
                title: "Estás seguro?",
                text: "Se eliminará el usuario",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
              if (willDelete) {
                $.ajax({
                    url: "{{url('/users')}}" + '/' + id_user,
                    headers: {'X-CSRF-TOKEN': csrf_token},
                    type: 'DELETE',
                    dataType: 'json',
                    data: {id: id_user}
                }).done(function(data){
                  table.ajax.reload();
                  sAlert(data.title, data.text, data.icon);
                });
              }
            });
        });
    
    
    //SWETALERT
    @if (Session::has('message'))
            sAlert(
            "{{ Session::get('message.title') }}",
            "{{ Session::get('message.text') }}",
            "{{ Session::get('message.icon') }}"
        );
    @endif
    
    function sAlert(title, text, icon)
    {
      swal({
        title: title,
        text: text,
        icon: icon,
        button: "Continue",
        timer: 3000
      });
    }
    
    </script>
     --}}