@extends('adminlte::page')

@section('title', 'Penyusunan Struktur')

@push('css')
  <link rel="stylesheet" href="{{ asset('/css/kanban.css') }}">
  <style media="screen">
    .content {
      overflow-x: scroll;
    }
  </style>
@endpush

@section('content_header')
  <h1>Menyusun Struktur</h1>
  <a href="{{ url('/rumusan/profil/mapping')}}" class="btn btn-primary">Kembali</a>
@endsection


@section('content')
  <div class="container-fluid" style="overflow: auto !important">
        <div id="sortableKanbanBoards" style="" class="row">

            <!--sütun başlangıç-->
            <!--sütun bitiş-->
            <!--sütun başlangıç-->
            <div class="panel panel-primary kanban-col">
                <div class="panel-heading">
                    Semester 1
                </div>
                <div class="panel-body">
                    <div id="semester1" class="kanban-centered">

                      <article class="kanban-entry grab" id="mk-1" draggable="true">
                          <div class="kanban-entry-inner">
                              <div class="kanban-label">
                                  Agama
                              </div>
                          </div>
                      </article>


                      <article class="kanban-entry grab" id="mk-2" draggable="true">
                          <div class="kanban-entry-inner">
                            <div class="kanban-label">
                            Pancasila
                          </div>
                      </div>
                  </article>

                      <article class="kanban-entry grab" id="mk-3" draggable="true">
                          <div class="kanban-entry-inner">
                            <div class="kanban-label">
                            Bahasa Indonesia
                          </div>
                      </div>
                  </article>

                      <article class="kanban-entry grab" id="mk-4" draggable="true">
                          <div class="kanban-entry-inner">
                            <div class="kanban-label">
                            Pendidikan Kewarganegaraan
                          </div>
                      </div>
                  </article>


                      <article class="kanban-entry grab" id="mk-5" draggable="true">
                          <div class="kanban-entry-inner">
                            <div class="kanban-label">
                            Bahasa Inggris
                          </div>
                      </div>
                  </article>


                    </div>
                </div>
            </div>
            <!--sütun bitiş-->
            <!--sütun başlangıç-->
            <div class="panel panel-primary kanban-col">
                <div class="panel-heading">
                    Semester 2
                </div>
                <div class="panel-body">
                    <div id="semester2" class="kanban-centered">
                      <article class="kanban-entry grab" id="mk7" draggable="true">
                          <div class="kanban-entry-inner">
                              <div class="kanban-label">
                                Basis Data,
                              </div>
                          </div>
                      </article>
                      <article class="kanban-entry grab" id="mk8" draggable="true">
                          <div class="kanban-entry-inner">
                              <div class="kanban-label">
                                Rekayasa Perangkat Lunak,
                              </div>
                          </div>
                      </article>
                      <article class="kanban-entry grab" id="mk9" draggable="true">
                          <div class="kanban-entry-inner">
                              <div class="kanban-label">
                                Interaksi Manusia-Komputer (HCI).
                              </div>
                          </div>
                      </article>


                    </div>
                </div>
                <div class="panel-footer">
                    <a href="#">Add a card...</a>
                </div>
            </div>

            <div class="panel panel-primary kanban-col">
                <div class="panel-heading">
                    Semester 3

                </div>
                <div class="panel-body">
                      <div id="semester3" class="kanban-centered">

                        <article class="kanban-entry grab" id="mk7" draggable="true">
                            <div class="kanban-entry-inner">
                                <div class="kanban-label">
                                  OSK
                                </div>
                            </div>
                        </article>
                        <article class="kanban-entry grab" id="mk8" draggable="true">
                            <div class="kanban-entry-inner">
                                <div class="kanban-label">
                                  Jaringan Komputer
                                </div>
                            </div>
                        </article>
                        <article class="kanban-entry grab" id="mk9" draggable="true">
                            <div class="kanban-entry-inner">
                                <div class="kanban-label">
                                  Pemrograman
                                </div>
                            </div>
                        </article>
                        <article class="kanban-entry grab" id="mk10" draggable="true">
                            <div class="kanban-entry-inner">
                                <div class="kanban-label">
                                  ALgoritma
                                </div>
                            </div>
                        </article>
                        <article class="kanban-entry grab" id="mk11" draggable="true">
                            <div class="kanban-entry-inner">
                                <div class="kanban-label">
                                  Praktik Pemrograman
                                </div>
                            </div>
                        </article>
                        <article class="kanban-entry grab" id="mk12" draggable="true">
                            <div class="kanban-entry-inner">
                                <div class="kanban-label">
                                  Strukur Data
                                </div>
                            </div>
                        </article>

                    </div>
                </div>

            </div>

            <div class="panel panel-primary kanban-col">
                <div class="panel-heading">
                    Semester 4
                </div>
                <div class="panel-body">
                    <div id="semester4" class="kanban-centered">
                      <article class="kanban-entry grab" id="item5" draggable="true">
                          <div class="kanban-entry-inner">
                              <div class="kanban-label">
                                  Agama
                              </div>
                          </div>
                      </article>
                    </div>
                </div>
            </div>

            <div class="panel panel-primary kanban-col">
                <div class="panel-heading">
                    Semester 5

                </div>
                <div class="panel-body">
                    <div id="semester5" class="kanban-centered">



                    </div>
                </div>

            </div>

            <div class="panel panel-primary kanban-col">
                <div class="panel-heading">
                    Semester 6
                </div>
                <div class="panel-body">
                    <div id="semester6" class="kanban-centered">

                      <article class="kanban-entry grab" id="mk-90" draggable="true">
                          <div class="kanban-entry-inner">

                              <div class="kanban-label">
                                  Tugas Akhir
                              </div>
                          </div>
                      </article>

                      <article class="kanban-entry grab" id="mk-89" draggable="true">
                          <div class="kanban-entry-inner">

                              <div class="kanban-label">
                                  Magang
                              </div>
                          </div>
                      </article>


                    </div>
                </div>

            </div>
            <!--sütun bitiş-->


        </div>
    </div>


    <!-- Static Modal -->
    <div class="modal modal-static fade" id="processing-modal" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fa fa-refresh fa-5x fa-spin"></i>
                        <h4>Mohon Tunggu...</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
  <script type="text/javascript">
  $(function () {
  var kanbanCol = $('.panel-body');
  kanbanCol.css('max-height', (window.innerHeight - 150) + 'px');

  var kanbanColCount = parseInt(kanbanCol.length);
  $('.container-fluid').css('min-width', (kanbanColCount * 350) + 'px');

  draggableInit();

  $('.panel-heading').click(function() {
      var $panelBody = $(this).parent().children('.panel-body');
      $panelBody.slideToggle();
  });
});

function draggableInit() {
  var sourceId;

  $('[draggable=true]').bind('dragstart', function (event) {
      sourceId = $(this).parent().attr('id');
      event.originalEvent.dataTransfer.setData("text/plain", event.target.getAttribute('id'));
  });

  $('.panel-body').bind('dragover', function (event) {
      event.preventDefault();
  });

  $('.panel-body').bind('drop', function (event) {
      var children = $(this).children();
      var targetId = children.attr('id');

      if (sourceId != targetId) {
          var elementId = event.originalEvent.dataTransfer.getData("text/plain");

          $('#processing-modal').modal('toggle'); //before post


          // Post data
          setTimeout(function () {
              var element = document.getElementById(elementId);
              children.prepend(element);
              $('#processing-modal').modal('toggle'); // after post
          }, 1000);

      }

      event.preventDefault();
  });
}

  </script>
@endpush
