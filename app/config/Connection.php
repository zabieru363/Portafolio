<?php
    class Connection
    {
        private $server = "127.0.0.1";  # localhost
        private $user = "root";
        private $password = "";
        protected $dbname;
        public $rows = [];
        private $connection;

        /**
         * Constructor que recoge el nombre de la base de datos a conectar.
         * @param string El nombre de la base de datos.
         */
        public function __construct(string $dbname)
        {
            $this->dbname = $dbname;
        }

        /**
         * Método que nos permite conectarnos a la base de datos.
         */
        public function connect()
        {
            try
            {
                $this->connection = new PDO("mysql:host=$this->server;dbname=$this->dbName",$this->user,$this->password); 
                $this->connection ->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
                $this->connection ->exec("SET NAMES utf8mb4");
            }
            catch(PDOException $e)
            {
                echo "Error al conectarse a la base de datos " . $e->getMessage();
            }
        }

        /**
         * Método que cierra la conexión con la base de datos.
         */
        public function close()
        {
            $this->connection = null;
        }

        /**
         * Método para hacer consultas simples (INSERT INTO, UPDATE y DELETE)
         * @param string La consulta simple a ejecutar.
         * @param array Un array con los campos de la consulta.
         */
        public function simple_query(string $query, array $param)
        {
            $this->connect();

            $statement = $this->connection->prepare($query);

            if(!$statement->execute($param))
            {
                echo "Error al ejecutar la consulta" . $query;
            }

            $this->close();
        }

        /**
         * Método que realiza una consulta que devuelve datos (consulta SELECT)
         * @param string La consulta de datos a ejecutar.
         * @param array El array con los campos de la consulta.
         */
        public function data_query(string $query,array $param)
        {
            $this->connect();

            # Vaciar el array de filas de consultas anteriores.
            $this->rows = [];

            $statement = $this->connection->prepare($query);

            if($statement->execute($param))
            {
                $this->rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            }
            else
            {
                echo "Error al ejecutar la consulta" . "<br>";
            }

            $this->close();
        }
    }
?>