<?php

declare(strict_types=1);

class Movie
{
  public function __construct(
    private string $title,
    private int $days_until,
    private string $release_date,
    private string $overview,
    private string $poster_url,
    private string $following_production_title,
    private int $following_production_days_until,
  ) {}

  public static function fetchAndCreateMovie(): Movie
  {
    $data = get_api_data(API_URL);
    return new self(
      $data['title'],
      $data['days_until'],
      $data['release_date'],
      $data['overview'],
      $data['poster_url'],
      $data['following_production']['title'],
      $data['following_production']['days_until']
    );
  }

  public function getMovieTitle(): string
  {
    return $this->title;
  }
  public function getDaysUntil(): int
  {
    return $this->days_until;
  }
  public function getReleaseDate(): string
  {
    return $this->release_date;
  }
  public function getOverview(): string
  {
    return $this->overview;
  }
  public function getPosterUrl(): string
  {
    return $this->poster_url;
  }
  public function getFollowingProductionTitle(): string
  {
    return $this->following_production_title;
  }
  public function getFollowingProductionDaysUntil(): int
  {
    return $this->following_production_days_until;
  }
}
