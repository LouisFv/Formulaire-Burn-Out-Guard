<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Burn Out Guard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar"><img src="images/logodetoure.png" alt="Logo" width="170px"></nav>
    <div class="Tittle_page" style="color: #001858;"><h1>Formulaire Burn Out Guard</h1></div>
        <div class="container">
                <div class="form">
                    <label for="Information">Vos informations:</label>
                    <ul>
                        <li>NOM, Prenom</li>
                        <li>nom.prenom@gmail.com</li>
                        <li>Filière associé</li>
                    </ul>

                <form action="traitement.php" method="post">
                    <div class="form-group">
                        <label for="charge_travailq1">1. Comment vous sentez-vous par rapport à votre charge de travail actuelle ?</label><br>
                        <fieldset>
                            <label for="Mal1">
                                <input type="radio" id="Mal1" name="charge_travailq1" value=""> Mal
                            </label><br>
                            <label for="Plutot_mal1">
                                <input type="radio" id="Plutot_mal1" name="charge_travailq1" value=""> Plutôt mal
                            </label><br>
                            <label for="Normal1">
                                <input type="radio" id="Normal1" name="charge_travailq1" value=""> Normal
                            </label><br>
                            <label for="Plutot_bien1">
                                <input type="radio" id="Plutot_bien1" name="charge_travailq1" value=""> Plutôt bien
                            </label><br>
                            <label for="Bien1">
                                <input type="radio" id="Bien1" name="charge_travailq1" value=""> Bien
                            </label>
                        </fieldset>
                    </div>



                    <div class="form-group">
                        <label for="charge_travailq2">2. Avez-vous l'impression d'être constamment sous pression ou débordé par vos responsabilités ?</label><br>
                        <fieldset>
                                <label for="Mal2">
                                    <input type="radio" id="Mal2" name="charge_travailq2" value=""> Mal
                                </label><br>
                                <label for="Plutot_mal2">
                                    <input type="radio" id="Plutot_mal2" name="charge_travailq2" value=""> Plutôt mal
                                </label><br>
                                <label for="Normal2">
                                    <input type="radio" id="Normal2" name="charge_travailq2" value=""> Normal
                                </label><br>
                                <label for="Plutot_bien2">
                                    <input type="radio" id="Plutot_bien2" name="charge_travailq2" value=""> Plutôt bien
                                </label><br>
                                <label for="Bien2">
                                    <input type="radio" id="Bien2" name="charge_travailq2" value=""> Bien
                                </label>
                        </fieldset>
                    </div>



                        <div class="form-group">
                    <label for="charge_travailq3">3. Êtes-vous satisfait de votre équilibre entre vie professionnelle et vie personnelle ?</label><br>
                    <fieldset>
                        <label for="Mal3">
                            <input type="radio" id="Mal3" name="charge_travailq3" value=""> Mal
                        </label><br>
                        <label for="Plutot_mal3">
                            <input type="radio" id="Plutot_mal3" name="charge_travailq3" value=""> Plutôt mal
                        </label><br>
                        <label for="Normal3">
                            <input type="radio" id="Normal3" name="charge_travailq3" value=""> Normal
                        </label><br>
                        <label for="Plutot_bien3">
                            <input type="radio" id="Plutot_bien3" name="charge_travailq3" value=""> Plutôt bien
                        </label><br>
                        <label for="Bien3">
                            <input type="radio" id="Bien3" name="charge_travailq3" value=""> Bien
                        </label>
                    </fieldset>
                </div>




                <div class="form-group">
                    <label for="charge_travailq4">4. Avez-vous les ressources nécessaires pour accomplir vos tâches de manière efficace ?</label><br>
                    <fieldset>
                        <label for="Mal4">
                            <input type="radio" id="Mal4" name="charge_travailq4" value=""> Mal
                        </label><br>
                        <label for="Plutot_mal4">
                            <input type="radio" id="Plutot_mal4" name="charge_travailq4" value=""> Plutôt mal
                        </label><br>
                        <label for="Normal4">
                            <input type="radio" id="Normal4" name="charge_travailq4" value=""> Normal
                        </label><br>
                        <label for="Plutot_bien4">
                            <input type="radio" id="Plutot_bien4" name="charge_travailq4" value=""> Plutôt bien
                        </label><br>
                        <label for="Bien4">
                            <input type="radio" id="Bien4" name="charge_travailq4" value=""> Bien
                        </label>
                    </fieldset>
                </div>



                <div class="form-group">
                    <label for="charge_travailq5">5. Avez-vous des difficultés à déconnecter du travail une fois votre journée terminée ?</label><br>
                    <fieldset>
                        <label for="Mal5">
                            <input type="radio" id="Mal5" name="charge_travailq5" value=""> Mal
                        </label><br>
                        <label for="Plutot_mal5">
                            <input type="radio" id="Plutot_mal5" name="charge_travailq5" value=""> Plutôt mal
                        </label><br>
                        <label for="Normal5">
                            <input type="radio" id="Normal5" name="charge_travailq5" value=""> Normal
                        </label><br>
                        <label for="Plutot_bien5">
                            <input type="radio" id="Plutot_bien5" name="charge_travailq5" value=""> Plutôt bien
                        </label><br>
                        <label for="Bien5">
                            <input type="radio" id="Bien5" name="charge_travailq5" value=""> Bien
                        </label>
                    </fieldset>
                </div>



                <div class="form-group">
                        <label for="charge_travailq6">6. Quelles sont vos principales sources de stress au travail ?</label><br>
                        <fieldset>
                            <label for="Mal6">
                                <input type="radio" id="Mal6" name="charge_travailq6" value=""> Mal
                            </label><br>
                            <label for="Plutot_mal6">
                                <input type="radio" id="Plutot_mal6" name="charge_travailq6" value=""> Plutôt mal
                            </label><br>
                            <label for="Normal6">
                                <input type="radio" id="Normal6" name="charge_travailq6" value=""> Normal
                            </label><br>
                            <label for="Plutot_bien6">
                                <input type="radio" id="Plutot_bien6" name="charge_travailq6" value=""> Plutôt bien
                            </label><br>
                            <label for="Bien6">
                                <input type="radio" id="Bien6" name="charge_travailq6" value=""> Bien
                            </label>
                        </fieldset>
                    </div>



                    <div class="form-group">
                            <label for="charge_travailq7">7. Y a-t-il des tâches spécifiques qui vous semblent particulièrement épuisantes mentalement ou émotionnellement ?</label><br>
                            <fieldset>
                                <label for="Mal7">
                                    <input type="radio" id="Mal7" name="charge_travailq7" value=""> Mal
                                </label><br>
                                <label for="Plutot_mal7">
                                    <input type="radio" id="Plutot_mal7" name="charge_travailq7" value=""> Plutôt mal
                                </label><br>
                                <label for="Normal7">
                                    <input type="radio" id="Normal7" name="charge_travailq7" value=""> Normal
                                </label><br>
                                <label for="Plutot_bien7">
                                    <input type="radio" id="Plutot_bien7" name="charge_travailq7" value=""> Plutôt bien
                                </label><br>
                                <label for="Bien7">
                                    <input type="radio" id="Bien7" name="charge_travailq7" value=""> Bien
                                </label>
                            </fieldset>
                        </div>



                        <div class="form-group">
                            <label for="charge_travailq8">8. Avez-vous le sentiment d'avoir suffisamment de soutien de la part de vos collègues et de votre supérieur hiérarchique ?</label><br>
                            <fieldset>
                                <label for="Mal8">
                                    <input type="radio" id="Mal8" name="charge_travailq8" value=""> Mal
                                </label><br>
                                <label for="Plutot_mal8">
                                    <input type="radio" id="Plutot_mal8" name="charge_travailq8" value=""> Plutôt mal
                                </label><br>
                                <label for="Normal8">
                                    <input type="radio" id="Normal8" name="charge_travailq8" value=""> Normal
                                </label><br>
                                <label for="Plutot_bien8">
                                    <input type="radio" id="Plutot_bien8" name="charge_travailq8" value=""> Plutôt bien
                                </label><br>
                                <label for="Bien8">
                                    <input type="radio" id="Bien8" name="charge_travailq8" value=""> Bien
                                </label>
                            </fieldset>
                        </div>



                        <div class="form-group">
                            <label for="charge_travailq9">9. Comment percevez-vous votre niveau d'énergie et de motivation par rapport à il y a quelques semaines/mois ?</label><br>
                            <fieldset>
                                <label for="Mal9">
                                    <input type="radio" id="Mal9" name="charge_travailq9" value=""> Mal
                                </label><br>
                                <label for="Plutot_mal9">
                                    <input type="radio" id="Plutot_mal9" name="charge_travailq9" value=""> Plutôt mal
                                </label><br>
                                <label for="Normal9">
                                    <input type="radio" id="Normal9" name="charge_travailq9" value=""> Normal
                                </label><br>
                                <label for="Plutot_bien9">
                                    <input type="radio" id="Plutot_bien9" name="charge_travailq9" value=""> Plutôt bien
                                </label><br>
                                <label for="Bien9">
                                    <input type="radio" id="Bien9" name="charge_travailq9" value=""> Bien
                                </label>
                            </fieldset>
                        </div>



                        <div class="form-group">
                            <label for="charge_travailq10">10. Avez-vous des idées ou des suggestions pour améliorer vos conditions de travail et réduire le stress ?</label><br>
                            <fieldset>
                                <label for="Mal10">
                                    <input type="radio" id="Mal10" name="charge_travailq10" value=""> Mal
                                </label><br>
                                <label for="Plutot_mal10">
                                    <input type="radio" id="Plutot_mal10" name="charge_travailq10" value=""> Plutôt mal
                                </label><br>
                                <label for="Normal10">
                                    <input type="radio" id="Normal10" name="charge_travailq10" value=""> Normal
                                </label><br>
                                <label for="Plutot_bien10">
                                    <input type="radio" id="Plutot_bien10" name="charge_travailq10" value=""> Plutôt bien
                                </label><br>
                                <label for="Bien10">
                                    <input type="radio" id="Bien10" name="charge_travailq10" value=""> Bien
                                </label>
                            </fieldset>
                        </div>



                        <div class="form-group">
                            <label for="charge_travailq11">11. Comment vous sentez-vous le matin à l'idée de devoir affronter une autre journée de travail ?</label><br>
                            <fieldset>
                                <label for="Mal11">
                                    <input type="radio" id="Mal11" name="charge_travailq11" value=""> Mal
                                </label><br>
                                <label for="Plutot_mal11">
                                    <input type="radio" id="Plutot_mal11" name="charge_travailq11" value=""> Plutôt mal
                                </label><br>
                                <label for="Normal11">
                                    <input type="radio" id="Normal11" name="charge_travailq11" value=""> Normal
                                </label><br>
                                <label for="Plutot_bien11">
                                    <input type="radio" id="Plutot_bien11" name="charge_travailq11" value=""> Plutôt bien
                                </label><br>
                                <label for="Bien11">
                                    <input type="radio" id="Bien11" name="charge_travailq11" value=""> Bien
                                </label>
                            </fieldset>
                        </div>



                        <div class="form-group">
                            <label for="charge_travailq12">12. Comment ressentez vous votre relation avec vos collègues ?</label><br>
                            <fieldset>
                                <label for="Mal12">
                                    <input type="radio" id="Mal12" name="charge_travailq12" value=""> Mal
                                </label><br>
                                <label for="Plutot_mal12">
                                    <input type="radio" id="Plutot_mal12" name="charge_travailq12" value=""> Plutôt mal
                                </label><br>
                                <label for="Normal12">
                                    <input type="radio" id="Normal12" name="charge_travailq12" value=""> Normal
                                </label><br>
                                <label for="Plutot_bien12">
                                    <input type="radio" id="Plutot_bien12" name="charge_travailq12" value=""> Plutôt bien
                                </label><br>
                                <label for="Bien12">
                                    <input type="radio" id="Bien12" name="charge_travailq12" value=""> Bien
                                </label>
                            </fieldset>
                        </div>



                        <div class="form-group">
                            <label for="charge_travailq13">13. Est ce que vous pensez que votre travail est gratifiant ?</label><br>
                            <fieldset>
                                <label for="Mal13">
                                    <input type="radio" id="Mal13" name="charge_travailq13" value=""> Mal
                                </label><br>
                                <label for="Plutot_mal13">
                                    <input type="radio" id="Plutot_mal13" name="charge_travailq13" value=""> Plutôt mal
                                </label><br>
                                <label for="Normal13">
                                    <input type="radio" id="Normal13" name="charge_travailq13" value=""> Normal
                                </label><br>
                                <label for="Plutot_bien13">
                                    <input type="radio" id="Plutot_bien13" name="charge_travailq13" value=""> Plutôt bien
                                </label><br>
                                <label for="Bien13">
                                    <input type="radio" id="Bien13" name="charge_travailq13" value=""> Bien
                                </label>
                            </fieldset>
                        </div>



                        <div class="form-group">
                            <label for="charge_travailq14">14. Pensez vous avoir une atmosphère détendue sur votre lieu de travail ?</label><br>
                            <fieldset>
                                <label for="Mal14">
                                    <input type="radio" id="Mal14" name="charge_travailq14" value=""> Mal
                                </label><br>
                                <label for="Plutot_mal14">
                                    <input type="radio" id="Plutot_mal14" name="charge_travailq14" value=""> Plutôt mal
                                </label><br>
                                <label for="Normal14">
                                    <input type="radio" id="Normal14" name="charge_travailq14" value=""> Normal
                                </label><br>
                                <label for="Plutot_bien14">
                                    <input type="radio" id="Plutot_bien14" name="charge_travailq14" value=""> Plutôt bien
                                </label><br>
                                <label for="Bien14">
                                    <input type="radio" id="Bien14" name="charge_travailq14" value=""> Bien
                                </label>
                            </fieldset>
                        </div>




                        <div class="form-group">
                            <label for="charge_travailq15">15. Êtes vous toujours calme ou détendue sur votre lieu de travail ?</label><br>
                            <fieldset>
                                <label for="Mal15">
                                    <input type="radio" id="Mal15" name="charge_travailq15" value=""> Mal
                                </label><br>
                                <label for="Plutot_mal15">
                                    <input type="radio" id="Plutot_mal15" name="charge_travailq15" value=""> Plutôt mal
                                </label><br>
                                <label for="Normal15">
                                    <input type="radio" id="Normal15" name="charge_travailq15" value=""> Normal
                                </label><br>
                                <label for="Plutot_bien15">
                                    <input type="radio" id="Plutot_bien15" name="charge_travailq15" value=""> Plutôt bien
                                </label><br>
                                <label for="Bien15">
                                    <input type="radio" id="Bien15" name="charge_travailq15" value=""> Bien
                                </label>
                            </fieldset>
                        </div>



                        <div class="form-group">
                            <label for="charge_travailq16">16. Souhaitez-vous rester dans votre travail actuel?</label><br>
                            <fieldset>
                                <label for="Mal16">
                                    <input type="radio" id="Mal16" name="charge_travailq16" value=""> Mal
                                </label><br>
                                <label for="Plutot_mal16">
                                    <input type="radio" id="Plutot_mal16" name="charge_travailq16" value=""> Plutôt mal
                                </label><br>
                                <label for="Normal16">
                                    <input type="radio" id="Normal16" name="charge_travailq16" value=""> Normal
                                </label><br>
                                <label for="Plutot_bien16">
                                    <input type="radio" id="Plutot_bien16" name="charge_travailq16" value=""> Plutôt bien
                                </label><br>
                                <label for="Bien16">
                                    <input type="radio" id="Bien16" name="charge_travailq16" value=""> Bien
                                </label>
                            </fieldset>
                        </div>


                <button class="button_send"type="submit">Envoyer</button>
                </form>
        </div>
    </div>
</body>
</html>
