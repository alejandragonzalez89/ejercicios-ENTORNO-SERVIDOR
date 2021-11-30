<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>dado de juego</title>
  </head>
  <body>
    <?php
    /**
     * creacion de clase dado
     */
    class claseDado

    {
      // Declaración de una propiedad
        private $minNumDado = 0;
        private $maxNumDado = 12;



        //GETTERS
           public function getMinNumDado(){
               return $this->minNumDado;
            }

            public function getMaxNumDado(){
                return $this->maxNumDado;
             }

        //SETTERS
        public function setMinNumDado($minNumDado)  {
        $this-> minNumDado = $minNumDado;
        return $this;
          }

        public function setMaxNumDado($maxNumDado)  {
        $this-> maxNumDado = $maxNumDado;
        return $this;
            }

      // Declaracion del método
        public function TirarDado() {
        return rand ($this->minNumDado,$this->maxNumDado);

      }


    }




     ?>

  </body>
</html>
