<?php

// Abstração e Encapsulamento
class Animal {
    private $nome;
    private $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // Método abstrato
    public function fazerSom() {
        // Deixe a implementação para as classes derivadas
    }

    public function obterInformacoes() {
        return "{$this->nome} tem {$this->idade} anos";
    }
}

// Herança
class Cachorro extends Animal {
    public function fazerSom() {
        return "Au Au";
    }
}

class Gato extends Animal {
    public function fazerSom() {
        return "Miau";
    }
}

// Polimorfismo
function apresentarAnimal(Animal $animal) {
    echo $animal->fazerSom() . PHP_EOL;
    echo $animal->obterInformacoes() . PHP_EOL;
    echo PHP_EOL;
}

// Uso
$cachorro = new Cachorro("Bob", 3);
$gato = new Gato("Mia", 2);

apresentarAnimal($cachorro);
apresentarAnimal($gato);

?>