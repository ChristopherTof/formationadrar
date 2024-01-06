<?php

class Categorie
{
    private ?int $id_categorie;
    private ?string $nom_categorie;
    private array $articles;

    //constructeur

    public function __construct()
    {
        $this->articles = [];
    }

    //getter et setter

    public function getId(): ?int
    {
        return $this->id_categorie;
    }

    public function setId(int $id): void
    {
        $this->id_categorie = $id;
    }

    public function getNom(): ?string
    {
        return $this->nom_categorie;
    }

    public function setNom(string $nom_categorie): void
    {
        $this->nom_categorie = $nom_categorie;
    }

    public function getArticle(): array
    {
        return $this->articles;
    }

    public function addArticle(Article $article): void
    {
        $this->articles[] = $article;
    }

    public function delArticle(Article $article)
    {
        foreach ($this->articles as $value) {
            if ($value === $article) {
                unset($value);
            }
        }
    }
}
