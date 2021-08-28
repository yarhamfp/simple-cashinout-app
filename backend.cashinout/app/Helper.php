<?php

function formatPrice($stirng)
{
  return str_replace(',','.',number_format($stirng));
}