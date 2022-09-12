INSTALACION
------------

### Base de datos:
Crear Usuario y Base de datos Mysql con los siguientes datos:

	Database: emoac
	Username: emoac
	Password: root

### Aplicacion:

Clonar repositorio

    git clone https://github.com/RoTowers/emoac.git
    

Entrar e la carpeta

    cd emoac   
    
Instalar dependencias

    composer install
    
Dentro de la carpeta emoac, creamos una carpeta en la ruta web/uploads

    mkdir web/uploads
	
Arrancamos las migraciones

	php yii migrate

Arrancamos la aplicación

	php yii serve
	
Abrimos http://localhost:8080/ en el navegador y clickear en la opcion "Productos" en el menu.