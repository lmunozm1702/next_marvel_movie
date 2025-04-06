<?php

declare(strict_types=1);

function render_template(string $template, Movie $next_movie): void
{
  require "templates/$template.php";
}

function get_api_data(string $url): array
{
  $ch = curl_init(API_URL);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  curl_close($ch);
  $data = json_decode($response, true);
  return $data;
}
