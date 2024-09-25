<p> Nombre:
    <?php
        echo $_POST["name"];
    ?>
</p>
<br>
<p> Apellidos:
    <?php
        echo $_POST["lastName"];
    ?>
</p>
<br>
<p> Edad:
<?php
                if ($_POST["age"] < 18) {
            ?>
                <p style="color: red;">
                    <?php
                        echo $_POST["age"];
                    ?>
                </p>
            <?php
                } else {
            ?>
                <p style="color: green;">
                    <?php
                        echo $_POST["age"];
                    ?>
                </p>
            <?php
                }
            ?>
</p>
<br>
<p> Peso:
    <?php
        echo $_POST["weight"];
    ?>
</p>
<br>
<p> Peso:
    <?php
        echo $_POST["weight"];
    ?>
</p>
<br>
<p> Altura:
    <?php
        echo $_POST["height"];
    ?>
</p>
<br>
<p> Asignaturas:
    <?php
        echo $_POST["asignature"];
    ?>
</p>