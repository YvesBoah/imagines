<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire-Boah
 * Date: 18/10/2017
 * Time: 10:16
 */
?>

@extends('Layouts.app')

@push('contenu_profil')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                {{-- Style Appliqué à L'image --}}
                <style>
                    #img_profile{
                        width:150px;
                        height:150px;
                        float:left;
                        border-radius:50%;
                        margin-right:25px;
                    }
                </style>
                {{-- Style Appliqué à L'image --}}
                <img id="img_profile" src="avatars/{{$user->avatar}}" alt=""/>
                
                  <?php if($user->cv_eleve){ ?>
                  <a href="cv/{{$user->cv_eleve}}">Telecharger Votre cv</a>
                   <?php }else{ ?>
                     <p class="lead">Vous n'avez pas encore de cv !</p>
                   <?php }?>
            </div>
            <div class="col-md-8">
                <h3>Bonjour <strong>{{$user->name}}</strong> Nous sommes Ravis De vous revoir ♥</h3>

               

            </div>
        </div>
    </div>


@endpush