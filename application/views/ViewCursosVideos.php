<div class="content">
    <div class="container">
        <?php 
        foreach ($query as $row)
            {  ?>
                <table>
                  <tbody id="mySearch">
                      <tr>
                        <td>
                            <div id="mySearch" class="row">
                                <div class="col-xl-5 col-lg-5 ">
                                <div class="team-block">
                                    <div class="team-img">
                                        <img src="http://mouse.latercera.com/wp-content/uploads/2017/06/4-900x600.jpg" alt="video no cargado">
                                        <div  class="team-content">
                                            <h4 class="text-white mb0"><?php echo $row['nombreCurso']; ?></h4>
                                        </div>
                                        <div class="overlay">
                                            <div class="text">
                                                <h4 class="mb0 text-white"><?php echo $row['nombreCurso']; ?></h4>
                                                <p><?php echo $row['descripcion']; ?></p>
                                                <form >
                                                  <div class="d-flex flex-row">
                                                    <div class="p-2">
                                                        <input id="radio1" type="radio" name="estrellas" value="5">
                                                        <label for="radio1">★</label>
                                                    </div>
                                                    <div class="p-2">
                                                        <input id="radio2" type="radio" name="estrellas" value="4">
                                                        <label for="radio2">★</label>
                                                    </div>
                                                    <div class="p-2">
                                                        <input id="radio3" type="radio" name="estrellas" value="3">
                                                        <label for="radio3">★</label>
                                                    </div>
                                                    <div class="p-2">
                                                        <input id="radio4" type="radio" name="estrellas" value="2">
                                                        <label for="radio4">★</label>
                                                    </div>
                                                    <div class="p-2">
                                                        <input id="radio5" type="radio" name="estrellas" value="1">
                                                        <label for="radio5">★</label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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


