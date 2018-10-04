<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$encuestas_enviadas}}</h3>

                <p>Encuestas enviadas</p>
              </div>
              <div class="icon">
                <i class="fa fa-send"></i>
              </div>
              <a href="{{ route('SentSurveys') }}" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$encuestas_recibidas}}</h3>

                <p>Encuestas respondidas</p>
              </div>
              <div class="icon">
                <i class="fa fa-comments"></i>
              </div>
              <a href="{{ route('AnsweredSurveys') }}" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$enviado_trip}}</h3>

                <p>Mails del TripAdvisor Enviados</p>
              </div>
              <div class="icon">
                <i class="fa fa-envelope"></i>
              </div>
              <a href="{{ route('SentTrip') }}" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$comentarios}}</h3>

                <p>Comentarios recibidos</p>
              </div>
              <div class="icon">
                <i class="fa fa-comment"></i>
              </div>
              <a href="{{ route('CommentsReceived') }}" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>