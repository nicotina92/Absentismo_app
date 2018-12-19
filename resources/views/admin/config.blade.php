@extends('layouts.sidebar')

@section('scripts')
{{Html::script('js/calendar/moment.min.js')}}
{{Html::script('js/calendar/fullcalendar.js')}}
{{Html::script('js/calendar/locale-all.js')}}


<script>
    $(document).ready(function(){
        $('#calendar').fullCalendar({
            themeSystem: 'bootstrap4',
            locale: 'es',
            selectable:true,
            contentHeight:400,
            height:6000,
            select: function(startDate, endDate) {
                //alert('selected ' + startDate.format() + ' to ' + endDate.format());
                
                $("#fecha_ini").html(startDate.format("DD-MM-YYYY"));
                $("#fecha_fin").html(endDate.format("DD-MM-YYYY"));
                //console.log($("#fecha_ini").html());
                $('#ModalEventos').modal();
            },
            events: [
                @foreach($eventos as $evento)
                    {
                        title: '{{$evento->descripcion}}',
                        start: '{{$evento->fecha_inicio}}',
                        end: '{{$evento->fecha_fin}}',
                    },
                @endforeach
            ]
        });
    });
</script> 
    
@endsection
@section('styles')
    {{Html::style('css/calendar/fullcalendar.css')}}
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
@endsection

@section('admin-content')

<div class="container">
    <h3 class="text-center">CONFIGURAR CALENDARIO DE EMPRESA</h3>
    <div id="calendar" class="text-center"></div>

</div>


<!-- MODAL AÑADIR EVENTO -->
<div class="modal fade" id="ModalEventos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir Nuevo Evento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col">Fecha Inicio: <label id="fecha_ini"></label> </div>
            <div class="col">Fecha Fin: <label id="fecha_fin"></label> </div>
        </div>
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Titulo:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Color:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

@endsection