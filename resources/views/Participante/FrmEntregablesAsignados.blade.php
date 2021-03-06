@extends('layouts.template')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption font-light">
                        <i class="icon-settings font-light"></i>
                        <span class="caption-subject bold uppercase">Lista de Entregables Asignadosss</span>
                    </div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                        <thead>
                        <tr>
                            <th class="all">Proyecto</th>
                            <th class="min-tablet">Fase</th>
                            <th class="min-tablet">Entregable</th>
                            <th class="min-tablet">Estado</th>
                            <th class="all">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($xGstringEntregablesAsignado as $xGstringEntregablesAsignados)
                            <tr>
                                <td class="text-center">
                                    <span class="label label-sm label-success">{{$xGstringEntregablesAsignados->PROnombre_proyecto}}</span>
                                </td>
                                <td>{{$xGstringEntregablesAsignados->FAnombre_fase}}</td>
                                <td>{{$xGstringEntregablesAsignados->ENTRnombre_entregable}}</td>
                                <td>
                                    @if($xGstringEntregablesAsignados->ATPestado_tareaproyecto == 1)
                                        <span class="label label-sm label-primary">EN CURSO</span>
                                    @elseif($xGstringEntregablesAsignados->ATPestado_tareaproyecto == 2)
                                        <span class="label label-sm label-success">FINALIZADO</span>
                                    @else
                                        <span class="label label-sm label-danger">CANCELADO</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group pull-right">
                                        <button class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown">Opciones
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-info-circle"></i>Generar Revision Entregable</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-book"></i>Version Entregable
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{route('TareasAsignadas',$xGstringEntregablesAsignados->ENTRid_entregable)}}">
                                                    <i class="fa fa-book"></i>Tareas
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection