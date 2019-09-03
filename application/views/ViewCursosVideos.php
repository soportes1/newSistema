<div class="content">
    <div class="container">
        <?php 
        $query = $this->db->query("SELECT * FROM cursos");
        foreach ($query->result_array() as $row)
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
     <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb40 text-center">
            <?php 
            $query = $this->db->query("SELECT * FROM cursos");
            ?>
        </div>
    </div>
    <?php  foreach ($query->result_array() as $row)
    {  ?>
        <table>
          <tbody id="mySearch">
              <tr>
                <td><div id="mySearch" class="row">
                 <div class="col-xl-5 ">
                    <div class="team-block">
                        <div class="team-img" style="display: inline-block;">
                            <img src="http://mouse.latercera.com/wp-content/uploads/2017/06/4-900x600.jpg" alt="video no cargado">
                            <div  class="team-content" >
                                <h4 class="text-white mb0"><?php echo $row['nombreCurso']; ?></h4>
                            </div>
                            <div class="overlay">
                                <div class="text">
                                    <h4 class="mb0 text-white"><?php echo $row['nombreCurso']; ?></h4>
                                    <p><?php echo $row['descripcion']; ?></p>
                                    <form>
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


