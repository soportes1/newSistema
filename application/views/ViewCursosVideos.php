
<div class="padd">       
    <div class="row">
      <?php 
      foreach ($query as $row)
        {  ?>
          <table>
            <tbody id="mySearch">
              <tr>
                <td>
                  <div id="mySearch" class="col-sm">
                    <div class="card">
                      <div class="poster">
                        <img src="http://mouse.latercera.com/wp-content/uploads/2017/06/4-900x600.jpg">
                      </div>
                      <div class="details">
                        <h2><?php echo $row['nombreCurso']; ?><br></h2>
                        <!-- -->
                        <div class="rating">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-o" aria-hidden="true"></i>
                          <span>4/5</span>
                        </div>
                        <div class="tags">
                          <a name="idCurso" id="<?php echo $row['idCurso']; ?>" href="<?php echo base_url('detalle_curso'); ?>">
                          <span class="romance">Ver detalles</span>
                        </a>
                        </div>
                        <div class="info">
                          <p>
                            <?php echo $row['descripcion']; ?>
                          </p>
                        </div>
                        <div class="star">
                          <h4>Participantes</h4>
                          <ul>
                            <li><img src="https://timedotcom.files.wordpress.com/2015/03/460517204.jpg"></li>
                            <li><img src="https://observatoriog.bol.uol.com.br/wordpress/wp-content/uploads/2017/04/Gaston-Beauty-and-the-BEast.jpg"></li>
                            <li><img src="http://www.1023jack.com/wp-content/uploads/2016/12/BEAUTY-AND-THE-BEAST-Extended-TV-Spot-1-Christmas-Celebration-2017-Emma-Watson-Disney-Movie-HD.jpeg"></li>
                            <li><img src="https://timedotcom.files.wordpress.com/2015/03/460517204.jpg"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                </td>
              </tr>
            </tbody>
          </table>
        <?php } ?>
      </div>
    </div>


    <div class="col-md-10 offset-md-1">
        <div class="row pb-row">
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/K68UrdUOr2Y?list=RDzuAcaBkcYGE?ecver=1" 
                https://www.youtube.com/watch?v=K68UrdUOr2Y&feature=youtu.be
                frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">Claydee - Alena</label>
            </div>
            
        </div>
        <div class="row pb-row">
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/watch?v=fD2UExUhq-s?ecver=1" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">F.O. and Peeva - Lichnata</label>
            </div>
        </div>
    </div>


<style>
    .pb-video-container {
        padding-top: 20px;
        background: #bdc3c7;
        font-family: Lato;
    }

    .pb-video {
        border: 1px solid #e6e6e6;
        padding: 5px;
    }

        .pb-video:hover {
            background: #2c3e50;
        }

    .pb-video-frame {
        transition: width 2s, height 2s;
    }

        .pb-video-frame:hover {
            height: 300px;
        }

    .pb-row {
        margin-bottom: 10px;
    }
</style>


