<?php

class Batalha extends Eloquent
{
	//Campos que podem ser preenchidos com Input do usuário
	
	protected $fillable = array('etapas', 'video_1', 'videos_2', 'votos_1', 'votos_2', 'vencedor');
}