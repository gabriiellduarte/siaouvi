<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="public_paginas">
                <div class="col-md-12">
                    <form action="data_satisfacao_pesq.php" method="post" enctype="multipart/form-data" class="formsend2">
                        <h1 ="text-align: center; margin-bottom: 10px; font-size: 28px; text-align: -webkit-center; color:#E75125">
                            <strong ="padding-left: 5px;">Avaliação contínua dos serviços públicos</strong>
                        </h1>
                        <p ="text-align: center; margin-bottom: 10px; font-size:14px; line-height:1.2em;">Prezado cidadão, para melhor atender a sua demanda e aprimorar os serviços prestados por nossa gestão, gostaríamos que respondesse algumas perguntas para medir sua satisfação e, com isso, propor melhorias aos órgãos internos sobre os serviços avaliados.</p>
                        <input type="hidden" name="ncamp" value="11">
                        <input type="hidden" name="count_perguntas" value="14">
                        <input type="hidden" name="" id="verify_color">
                        <input type="hidden" name="count_atendimento" value="">
                        <div>
                            <div class="col-12 form-group list-group-item" ="padding:2%;">
                                <div class="row" ="margin-bottom:10px;">
                                    <div class="col-md-3 text-center-media">
                                        <h2 ="margin-top:  2rem; margin-bottom:.1em; font-size:16px;">INFORME SEU CPF</h2>
                                        <input type="text" class="form-control" placeholder="Digite seu cpf" name="cpf" id="cpf">
                                    </div>
                                    <div class="col-md-9">
                                        <p ="margin-top: 1rem; line-height:1.2em; font-size:14px; padding:10px;">O CPF é necessário para limitar a votação mensal por pessoa.<br>
Os dados informados nesta pesquisa estarão seguros de acordo com a Lei Geral de Proteção de Dados - LGPD<br>
O cidadão poderá votar, se desejar, todos os meses, caso haja mudança na qualidade do serviço prestado/oferecido.</p>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <div class="col-sm-3 col-md-3" ="padding: 0;">
                                                    <i class="icon-nota2" ="color: #c0392b; font-size: 14px; margin-right:3px;"></i> <span ="font-size: 14px; margin:0; color:#444444; text-align:center;">Muito insatisfeito</span>
                                                </div>
                                                <div class="col-sm-2 col-md-2" ="padding: 0;">
                                                    <i class="icon-nota4" ="color: #d35400; font-size: 14px; margin-right:3px;"></i> <span ="font-size: 14px; margin:0; color:#444444; text-align:center;">Insatiseito</span>
                                                </div>
                                                <div class="col-sm-2 col-md-2" ="padding: 0;">
                                                    <i class="icon-nota6" ="color: #f39c12; font-size: 14px; margin-right:3px;"></i> <span ="font-size: 14px; margin:0; color:#444444; text-align:center;">Neutro</span>
                                                </div>
                                                <div class="col-sm-2 col-md-2" ="padding: 0;">
                                                    <i class="icon-nota8" ="color: #2ecc71; font-size: 14px; margin-right:3px;"></i> <span ="font-size: 14px; margin:0; color:#444444; text-align:center;">Satisfeito</span>
                                                </div>
                                                <div class="col-sm-3 col-md-3" ="padding: 0;">
                                                    <i class="icon-nota10" ="color: #27ae60; font-size: 14px; margin-right:3px;"></i> <span ="font-size: 14px; margin:0; color:#444444; text-align:center;">Muito satisfeito</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="" ="padding:15px;">
                                                        
                                <input type="hidden" name="pergunta1" value="1">
                                <input type="hidden" name="resposta1" class="resposta1">
                                <div class="row form-group list-group-item">
                                    <div class="col-12 col-sm-12 col-md-8 text-center-media" ="border-right: none;">
                                        <h4 ="margin: 0; padding:1em .7em 1em .7em; font-weight:400; font-size:15px;"> Como você avalia a atual Gestão Administrativa do nosso Município?</h4>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-4" ="border-left: none;">
                                        <div ="display: flex; justify-content:space-between; padding-top:.64em; padding-bottom:.64em;" id="evenly">
                                            <label for="2" class="radio resposta1" data-color="#c0392b" data-id="resposta1" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota2" ="color: #c0392b; font-size: 30px;"></i>
                                            </label>

                                            <label for="4" class="radio resposta1" data-color="#d35400" data-id="resposta1" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota4" ="color: #d35400; font-size: 30px;"></i>
                                            </label>

                                            <label for="6" class="radio resposta1" data-color="#f39c12" data-id="resposta1" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota6" ="color: #f39c12; font-size: 30px;"></i>
                                            </label>

                                            <label for="8" class="radio resposta1" data-color="#2ecc71" data-id="resposta1" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota8" ="color: #2ecc71; font-size: 30px;"></i>
                                            </label>

                                            <label for="10" class="radio resposta1" data-color="#27ae60" data-id="resposta1" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota10" ="color: #27ae60; font-size: 30px;"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                                            
                                <input type="hidden" name="pergunta2" value="2">
                                <input type="hidden" name="resposta2" class="resposta2">
                                <div class="row form-group list-group-item">
                                    <div class="col-12 col-sm-12 col-md-8 text-center-media" ="border-right: none;">
                                        <h4 ="margin: 0; padding:1em .7em 1em .7em; font-weight:400; font-size:15px;"> Como você avalia o atendimento da Ouvidoria Geral do nosso Município?</h4>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-4" ="border-left: none;">
                                        <div ="display: flex; justify-content:space-between; padding-top:.64em; padding-bottom:.64em;" id="evenly">
                                            <label for="2" class="radio resposta2" data-color="#c0392b" data-id="resposta2" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota2" ="color: #c0392b; font-size: 30px;"></i>
                                            </label>

                                            <label for="4" class="radio resposta2" data-color="#d35400" data-id="resposta2" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota4" ="color: #d35400; font-size: 30px;"></i>
                                            </label>

                                            <label for="6" class="radio resposta2" data-color="#f39c12" data-id="resposta2" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota6" ="color: #f39c12; font-size: 30px;"></i>
                                            </label>

                                            <label for="8" class="radio resposta2" data-color="#2ecc71" data-id="resposta2" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota8" ="color: #2ecc71; font-size: 30px;"></i>
                                            </label>

                                            <label for="10" class="radio resposta2" data-color="#27ae60" data-id="resposta2" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota10" ="color: #27ae60; font-size: 30px;"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                                            
                                <input type="hidden" name="pergunta3" value="3">
                                <input type="hidden" name="resposta3" class="resposta3">
                                <div class="row form-group list-group-item">
                                    <div class="col-12 col-sm-12 col-md-8 text-center-media" ="border-right: none;">
                                        <h4 ="margin: 0; padding:1em .7em 1em .7em; font-weight:400; font-size:15px;"> Qual seu nível de satisfação com a transparência no nosso município?</h4>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-4" ="border-left: none;">
                                        <div ="display: flex; justify-content:space-between; padding-top:.64em; padding-bottom:.64em;" id="evenly">
                                            <label for="2" class="radio resposta3" data-color="#c0392b" data-id="resposta3" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota2" ="color: #c0392b; font-size: 30px;"></i>
                                            </label>

                                            <label for="4" class="radio resposta3" data-color="#d35400" data-id="resposta3" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota4" ="color: #d35400; font-size: 30px;"></i>
                                            </label>

                                            <label for="6" class="radio resposta3" data-color="#f39c12" data-id="resposta3" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota6" ="color: #f39c12; font-size: 30px;"></i>
                                            </label>

                                            <label for="8" class="radio resposta3" data-color="#2ecc71" data-id="resposta3" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota8" ="color: #2ecc71; font-size: 30px;"></i>
                                            </label>

                                            <label for="10" class="radio resposta3" data-color="#27ae60" data-id="resposta3" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota10" ="color: #27ae60; font-size: 30px;"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                                            
                                <input type="hidden" name="pergunta4" value="4">
                                <input type="hidden" name="resposta4" class="resposta4">
                                <div class="row form-group list-group-item">
                                    <div class="col-12 col-sm-12 col-md-8 text-center-media" ="border-right: none;">
                                        <h4 ="margin: 0; padding:1em .7em 1em .7em; font-weight:400; font-size:15px;"> Como você avalia o serviço de coleta de lixo em seu bairro/município?</h4>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-4" ="border-left: none;">
                                        <div ="display: flex; justify-content:space-between; padding-top:.64em; padding-bottom:.64em;" id="evenly">
                                            <label for="2" class="radio resposta4" data-color="#c0392b" data-id="resposta4" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota2" ="color: #c0392b; font-size: 30px;"></i>
                                            </label>

                                            <label for="4" class="radio resposta4" data-color="#d35400" data-id="resposta4" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota4" ="color: #d35400; font-size: 30px;"></i>
                                            </label>

                                            <label for="6" class="radio resposta4" data-color="#f39c12" data-id="resposta4" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota6" ="color: #f39c12; font-size: 30px;"></i>
                                            </label>

                                            <label for="8" class="radio resposta4" data-color="#2ecc71" data-id="resposta4" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota8" ="color: #2ecc71; font-size: 30px;"></i>
                                            </label>

                                            <label for="10" class="radio resposta4" data-color="#27ae60" data-id="resposta4" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota10" ="color: #27ae60; font-size: 30px;"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                                            
                                <input type="hidden" name="pergunta5" value="5">
                                <input type="hidden" name="resposta5" class="resposta5">
                                <div class="row form-group list-group-item">
                                    <div class="col-12 col-sm-12 col-md-8 text-center-media" ="border-right: none;">
                                        <h4 ="margin: 0; padding:1em .7em 1em .7em; font-weight:400; font-size:15px;"> Como você avalia o serviço de conservação de limpeza das ruas em seu bairro/município?</h4>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-4" ="border-left: none;">
                                        <div ="display: flex; justify-content:space-between; padding-top:.64em; padding-bottom:.64em;" id="evenly">
                                            <label for="2" class="radio resposta5" data-color="#c0392b" data-id="resposta5" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota2" ="color: #c0392b; font-size: 30px;"></i>
                                            </label>

                                            <label for="4" class="radio resposta5" data-color="#d35400" data-id="resposta5" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota4" ="color: #d35400; font-size: 30px;"></i>
                                            </label>

                                            <label for="6" class="radio resposta5" data-color="#f39c12" data-id="resposta5" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota6" ="color: #f39c12; font-size: 30px;"></i>
                                            </label>

                                            <label for="8" class="radio resposta5" data-color="#2ecc71" data-id="resposta5" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota8" ="color: #2ecc71; font-size: 30px;"></i>
                                            </label>

                                            <label for="10" class="radio resposta5" data-color="#27ae60" data-id="resposta5" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota10" ="color: #27ae60; font-size: 30px;"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                                            
                                <input type="hidden" name="pergunta6" value="6">
                                <input type="hidden" name="resposta6" class="resposta6">
                                <div class="row form-group list-group-item">
                                    <div class="col-12 col-sm-12 col-md-8 text-center-media" ="border-right: none;">
                                        <h4 ="margin: 0; padding:1em .7em 1em .7em; font-weight:400; font-size:15px;"> Como você avalia a situação da conservação do patrimônio histórico do seu bairro/município?</h4>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-4" ="border-left: none;">
                                        <div ="display: flex; justify-content:space-between; padding-top:.64em; padding-bottom:.64em;" id="evenly">
                                            <label for="2" class="radio resposta6" data-color="#c0392b" data-id="resposta6" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota2" ="color: #c0392b; font-size: 30px;"></i>
                                            </label>

                                            <label for="4" class="radio resposta6" data-color="#d35400" data-id="resposta6" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota4" ="color: #d35400; font-size: 30px;"></i>
                                            </label>

                                            <label for="6" class="radio resposta6" data-color="#f39c12" data-id="resposta6" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota6" ="color: #f39c12; font-size: 30px;"></i>
                                            </label>

                                            <label for="8" class="radio resposta6" data-color="#2ecc71" data-id="resposta6" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota8" ="color: #2ecc71; font-size: 30px;"></i>
                                            </label>

                                            <label for="10" class="radio resposta6" data-color="#27ae60" data-id="resposta6" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota10" ="color: #27ae60; font-size: 30px;"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                                            
                                <input type="hidden" name="pergunta7" value="7">
                                <input type="hidden" name="resposta7" class="resposta7">
                                <div class="row form-group list-group-item">
                                    <div class="col-12 col-sm-12 col-md-8 text-center-media" ="border-right: none;">
                                        <h4 ="margin: 0; padding:1em .7em 1em .7em; font-weight:400; font-size:15px;"> Como você avalia o serviço de conservação de praças, jardins e canteiros em seu bairro/município?</h4>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-4" ="border-left: none;">
                                        <div ="display: flex; justify-content:space-between; padding-top:.64em; padding-bottom:.64em;" id="evenly">
                                            <label for="2" class="radio resposta7" data-color="#c0392b" data-id="resposta7" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota2" ="color: #c0392b; font-size: 30px;"></i>
                                            </label>

                                            <label for="4" class="radio resposta7" data-color="#d35400" data-id="resposta7" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota4" ="color: #d35400; font-size: 30px;"></i>
                                            </label>

                                            <label for="6" class="radio resposta7" data-color="#f39c12" data-id="resposta7" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota6" ="color: #f39c12; font-size: 30px;"></i>
                                            </label>

                                            <label for="8" class="radio resposta7" data-color="#2ecc71" data-id="resposta7" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota8" ="color: #2ecc71; font-size: 30px;"></i>
                                            </label>

                                            <label for="10" class="radio resposta7" data-color="#27ae60" data-id="resposta7" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota10" ="color: #27ae60; font-size: 30px;"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                                            
                                <input type="hidden" name="pergunta8" value="8">
                                <input type="hidden" name="resposta8" class="resposta8">
                                <div class="row form-group list-group-item">
                                    <div class="col-12 col-sm-12 col-md-8 text-center-media" ="border-right: none;">
                                        <h4 ="margin: 0; padding:1em .7em 1em .7em; font-weight:400; font-size:15px;"> Como você avalia o empenho da gestão no fortalecimento da cultura e tradições em seu Município?</h4>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-4" ="border-left: none;">
                                        <div ="display: flex; justify-content:space-between; padding-top:.64em; padding-bottom:.64em;" id="evenly">
                                            <label for="2" class="radio resposta8" data-color="#c0392b" data-id="resposta8" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota2" ="color: #c0392b; font-size: 30px;"></i>
                                            </label>

                                            <label for="4" class="radio resposta8" data-color="#d35400" data-id="resposta8" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota4" ="color: #d35400; font-size: 30px;"></i>
                                            </label>

                                            <label for="6" class="radio resposta8" data-color="#f39c12" data-id="resposta8" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota6" ="color: #f39c12; font-size: 30px;"></i>
                                            </label>

                                            <label for="8" class="radio resposta8" data-color="#2ecc71" data-id="resposta8" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota8" ="color: #2ecc71; font-size: 30px;"></i>
                                            </label>

                                            <label for="10" class="radio resposta8" data-color="#27ae60" data-id="resposta8" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota10" ="color: #27ae60; font-size: 30px;"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                                            
                                <input type="hidden" name="pergunta9" value="9">
                                <input type="hidden" name="resposta9" class="resposta9">
                                <div class="row form-group list-group-item">
                                    <div class="col-12 col-sm-12 col-md-8 text-center-media" ="border-right: none;">
                                        <h4 ="margin: 0; padding:1em .7em 1em .7em; font-weight:400; font-size:15px;"> Como você avalia o serviço de iluminação pública de seu bairro/município?</h4>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-4" ="border-left: none;">
                                        <div ="display: flex; justify-content:space-between; padding-top:.64em; padding-bottom:.64em;" id="evenly">
                                            <label for="2" class="radio resposta9" data-color="#c0392b" data-id="resposta9" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota2" ="color: #c0392b; font-size: 30px;"></i>
                                            </label>

                                            <label for="4" class="radio resposta9" data-color="#d35400" data-id="resposta9" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota4" ="color: #d35400; font-size: 30px;"></i>
                                            </label>

                                            <label for="6" class="radio resposta9" data-color="#f39c12" data-id="resposta9" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota6" ="color: #f39c12; font-size: 30px;"></i>
                                            </label>

                                            <label for="8" class="radio resposta9" data-color="#2ecc71" data-id="resposta9" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota8" ="color: #2ecc71; font-size: 30px;"></i>
                                            </label>

                                            <label for="10" class="radio resposta9" data-color="#27ae60" data-id="resposta9" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota10" ="color: #27ae60; font-size: 30px;"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                                            
                                <input type="hidden" name="pergunta10" value="10">
                                <input type="hidden" name="resposta10" class="resposta10">
                                <div class="row form-group list-group-item">
                                    <div class="col-12 col-sm-12 col-md-8 text-center-media" ="border-right: none;">
                                        <h4 ="margin: 0; padding:1em .7em 1em .7em; font-weight:400; font-size:15px;"> Como você avalia a questão de segurança pública em seu bairro/município?</h4>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-4" ="border-left: none;">
                                        <div ="display: flex; justify-content:space-between; padding-top:.64em; padding-bottom:.64em;" id="evenly">
                                            <label for="2" class="radio resposta10" data-color="#c0392b" data-id="resposta10" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota2" ="color: #c0392b; font-size: 30px;"></i>
                                            </label>

                                            <label for="4" class="radio resposta10" data-color="#d35400" data-id="resposta10" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota4" ="color: #d35400; font-size: 30px;"></i>
                                            </label>

                                            <label for="6" class="radio resposta10" data-color="#f39c12" data-id="resposta10" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota6" ="color: #f39c12; font-size: 30px;"></i>
                                            </label>

                                            <label for="8" class="radio resposta10" data-color="#2ecc71" data-id="resposta10" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota8" ="color: #2ecc71; font-size: 30px;"></i>
                                            </label>

                                            <label for="10" class="radio resposta10" data-color="#27ae60" data-id="resposta10" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota10" ="color: #27ae60; font-size: 30px;"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                                            
                                <input type="hidden" name="pergunta11" value="11">
                                <input type="hidden" name="resposta11" class="resposta11">
                                <div class="row form-group list-group-item">
                                    <div class="col-12 col-sm-12 col-md-8 text-center-media" ="border-right: none;">
                                        <h4 ="margin: 0; padding:1em .7em 1em .7em; font-weight:400; font-size:15px;"> Como você avalia o fortalecimento e investimento em práticas esportivas e lúdicas em seu bairro/município?</h4>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-4" ="border-left: none;">
                                        <div ="display: flex; justify-content:space-between; padding-top:.64em; padding-bottom:.64em;" id="evenly">
                                            <label for="2" class="radio resposta11" data-color="#c0392b" data-id="resposta11" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota2" ="color: #c0392b; font-size: 30px;"></i>
                                            </label>

                                            <label for="4" class="radio resposta11" data-color="#d35400" data-id="resposta11" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota4" ="color: #d35400; font-size: 30px;"></i>
                                            </label>

                                            <label for="6" class="radio resposta11" data-color="#f39c12" data-id="resposta11" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota6" ="color: #f39c12; font-size: 30px;"></i>
                                            </label>

                                            <label for="8" class="radio resposta11" data-color="#2ecc71" data-id="resposta11" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota8" ="color: #2ecc71; font-size: 30px;"></i>
                                            </label>

                                            <label for="10" class="radio resposta11" data-color="#27ae60" data-id="resposta11" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota10" ="color: #27ae60; font-size: 30px;"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                                            
                                <input type="hidden" name="pergunta12" value="12">
                                <input type="hidden" name="resposta12" class="resposta12">
                                <div class="row form-group list-group-item">
                                    <div class="col-12 col-sm-12 col-md-8 text-center-media" ="border-right: none;">
                                        <h4 ="margin: 0; padding:1em .7em 1em .7em; font-weight:400; font-size:15px;"> Como você avalia o atendimento e serviços da Saúde do nosso município?</h4>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-4" ="border-left: none;">
                                        <div ="display: flex; justify-content:space-between; padding-top:.64em; padding-bottom:.64em;" id="evenly">
                                            <label for="2" class="radio resposta12" data-color="#c0392b" data-id="resposta12" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota2" ="color: #c0392b; font-size: 30px;"></i>
                                            </label>

                                            <label for="4" class="radio resposta12" data-color="#d35400" data-id="resposta12" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota4" ="color: #d35400; font-size: 30px;"></i>
                                            </label>

                                            <label for="6" class="radio resposta12" data-color="#f39c12" data-id="resposta12" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota6" ="color: #f39c12; font-size: 30px;"></i>
                                            </label>

                                            <label for="8" class="radio resposta12" data-color="#2ecc71" data-id="resposta12" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota8" ="color: #2ecc71; font-size: 30px;"></i>
                                            </label>

                                            <label for="10" class="radio resposta12" data-color="#27ae60" data-id="resposta12" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota10" ="color: #27ae60; font-size: 30px;"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                                            
                                <input type="hidden" name="pergunta13" value="13">
                                <input type="hidden" name="resposta13" class="resposta13">
                                <div class="row form-group list-group-item">
                                    <div class="col-12 col-sm-12 col-md-8 text-center-media" ="border-right: none;">
                                        <h4 ="margin: 0; padding:1em .7em 1em .7em; font-weight:400; font-size:15px;"> Como você avalia o atendimento e serviços da Educação do nosso município?</h4>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-4" ="border-left: none;">
                                        <div ="display: flex; justify-content:space-between; padding-top:.64em; padding-bottom:.64em;" id="evenly">
                                            <label for="2" class="radio resposta13" data-color="#c0392b" data-id="resposta13" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota2" ="color: #c0392b; font-size: 30px;"></i>
                                            </label>

                                            <label for="4" class="radio resposta13" data-color="#d35400" data-id="resposta13" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota4" ="color: #d35400; font-size: 30px;"></i>
                                            </label>

                                            <label for="6" class="radio resposta13" data-color="#f39c12" data-id="resposta13" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota6" ="color: #f39c12; font-size: 30px;"></i>
                                            </label>

                                            <label for="8" class="radio resposta13" data-color="#2ecc71" data-id="resposta13" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota8" ="color: #2ecc71; font-size: 30px;"></i>
                                            </label>

                                            <label for="10" class="radio resposta13" data-color="#27ae60" data-id="resposta13" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota10" ="color: #27ae60; font-size: 30px;"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                                            
                                <input type="hidden" name="pergunta14" value="14">
                                <input type="hidden" name="resposta14" class="resposta14">
                                <div class="row form-group list-group-item">
                                    <div class="col-12 col-sm-12 col-md-8 text-center-media" ="border-right: none;">
                                        <h4 ="margin: 0; padding:1em .7em 1em .7em; font-weight:400; font-size:15px;"> Como você avalia o atendimento e serviços da Assistência Social do nosso município?</h4>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-4" ="border-left: none;">
                                        <div ="display: flex; justify-content:space-between; padding-top:.64em; padding-bottom:.64em;" id="evenly">
                                            <label for="2" class="radio resposta14" data-color="#c0392b" data-id="resposta14" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota2" ="color: #c0392b; font-size: 30px;"></i>
                                            </label>

                                            <label for="4" class="radio resposta14" data-color="#d35400" data-id="resposta14" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota4" ="color: #d35400; font-size: 30px;"></i>
                                            </label>

                                            <label for="6" class="radio resposta14" data-color="#f39c12" data-id="resposta14" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota6" ="color: #f39c12; font-size: 30px;"></i>
                                            </label>

                                            <label for="8" class="radio resposta14" data-color="#2ecc71" data-id="resposta14" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota8" ="color: #2ecc71; font-size: 30px;"></i>
                                            </label>

                                            <label for="10" class="radio resposta14" data-color="#27ae60" data-id="resposta14" ="margin:0; display:flex; align-items:baseline;">
                                                <i class="icon-nota10" ="color: #27ae60; font-size: 30px;"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                                            
                        </div>

                        <div ="/* margin: 1.8em 1.2em 0 1.2em; */">
                            <textarea name="o_mensagem" id="o_mensagem" placeholder="Deixe sua mensagem (não obrigatório)" ="border-radius:3px; border-color: #a1a1a1; width:100%; padding-bottom:10%;" class="textarea" rows="2"></textarea>
                        </div>
                        <p ="line-height: 1.2; /* margin: .8em 1.2em 0 1.2em; */">
                            *Prezado(a), esta avaliação não será analisada como manifestação de Ouvidoria. Servirá apenas para revisarmos e refletirmos sobre as informações disponíveis nesta página
                            <br>
                            Esclarecemos que os dados fornecidos acima serão tratados com respeito à sua privacidade.
                            <br>
                            Seguindo a <strong><a href="https://www.planalto.gov.br/ccivil_03/_ato2015-2018/2018/lei/l13709.htm">LGPD - Lei Geral de Proteção de Dados 13.709</a></strong>, de 14 de agosto de 2018.
                            <br>
                        </p>

                        <div ="/* margin: 1.8em 0 0 1.2em; */">
                            <input type="submit" class="btn btn-primary" value="ENVIAR PESQUISA">
                        </div>

                    </form>
                </div>



                                
                <div class="col-md-12" ="margin-top: 1em;">
                    <form>
                        <div>
                            <h2 ="margin-bottom: 20px; font-size: 20px;"><strong>Avaliação contínua dos serviços públicos</strong>
                                <select name="ano" ="width: 30%; float:right;" class="form-control" id="idano">
                                    <!--<option value="">Selecione um ano</option>-->
                                    <option value="2025" data-filter="">2025</option><option value="2024" data-filter="">2024</option><option value="2023" data-filter="">2023</option>                                </select>

                                <input type="hidden" id="valano" value="2025">
                            </h2>
                        </div>
                        <div id="chart_div"><div ="position: relative;"><div dir="ltr" ="position: relative; width: 1110px; height: 400px;"><div ="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;" aria-label="A chart."><svg width="1110" height="400" aria-label="A chart." ="overflow: hidden;"><defs id="_ABSTRACT_RENDERER_ID_9"><clipPath id="_ABSTRACT_RENDERER_ID_10"><rect x="83" y="77" width="944" height="247"></rect></clipPath></defs><rect x="0" y="0" width="1110" height="400" stroke="none" stroke-width="0" fill="#ffffff"></rect><g><text text-anchor="start" x="83" y="56.2" font-family="Arial" font-size="12" font-weight="bold" stroke="none" stroke-width="0" fill="#000000">Resultado da pesquisa</text><rect x="83" y="46" width="944" height="12" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect></g><g><rect x="83" y="77" width="944" height="247" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect><g clip-path="url(https://aracati.ce.gov.br/pesquisasatisfacao.php#_ABSTRACT_RENDERER_ID_10)"><g><rect x="83" y="323" width="944" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="83" y="262" width="944" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="83" y="200" width="944" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="83" y="139" width="944" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="83" y="77" width="944" height="1" stroke="none" stroke-width="0" fill="#cccccc"></rect><rect x="83" y="292" width="944" height="1" stroke="none" stroke-width="0" fill="#ebebeb"></rect><rect x="83" y="231" width="944" height="1" stroke="none" stroke-width="0" fill="#ebebeb"></rect><rect x="83" y="169" width="944" height="1" stroke="none" stroke-width="0" fill="#ebebeb"></rect><rect x="83" y="108" width="944" height="1" stroke="none" stroke-width="0" fill="#ebebeb"></rect></g><g><rect x="144" y="321" width="194" height="2" stroke="#f39c12" stroke-width="1" fill="#f39c12"></rect><rect x="458" y="173" width="194" height="150" stroke="#2ecc71" stroke-width="1" fill="#2ecc71"></rect><rect x="772" y="90" width="194" height="233" stroke="#27ae60" stroke-width="1" fill="#27ae60"></rect></g><g><rect x="83" y="323" width="944" height="1" stroke="none" stroke-width="0" fill="#333333"></rect></g></g><g></g><g><g><text text-anchor="middle" x="240.66666666666666" y="341.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">Neutro</text></g><g><text text-anchor="middle" x="555" y="341.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">Satisfeito</text></g><g><text text-anchor="middle" x="869.3333333333333" y="341.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#222222">Muito satisfeito</text></g><g><text text-anchor="end" x="71" y="327.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">0</text></g><g><text text-anchor="end" x="71" y="266.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">20</text></g><g><text text-anchor="end" x="71" y="204.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">40</text></g><g><text text-anchor="end" x="71" y="143.2" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">60</text></g><g><text text-anchor="end" x="71" y="81.7" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#444444">80</text></g></g></g><g><g><text text-anchor="middle" x="555" y="375.7" font-family="Arial" font-size="12" font-="italic" stroke="none" stroke-width="0" fill="#222222">Quantidade de processos</text><rect x="83" y="365.5" width="944" height="12" stroke="none" stroke-width="0" fill-opacity="0" fill="#ffffff"></rect></g></g><g></g></svg><div aria-label="A tabular representation of the data in the chart." ="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;"><table><thead><tr><th>Element</th><th>Quantidade</th></tr></thead><tbody><tr><td>Neutro</td><td>1</td></tr><tr><td>Satisfeito</td><td>49</td></tr><tr><td>Muito satisfeito</td><td>76</td></tr></tbody></table></div></div></div><div aria-hidden="true" ="display: none; position: absolute; top: 410px; left: 1120px; white-space: nowrap; font-family: Arial; font-size: 12px; font-weight: bold;">Resultado da pesquisa</div><div></div></div></div>
                        <!--
                        <div id='chart_div_satis'></div>
                        <div id="grafsatisfacao" ="display: none; ">
                            <div id="chartdiv_satisfacao_img"></div>
                        </div>
                                    -->
                    </form>
                </div>
                <div class="text-center" ="padding:1em 0 1em 0">
                                            <span ="margin: 1em;">Quantidade de avaliações até o momento: 18 - Data/hora da última avaliação: 16/07/2025 14:22:09</span>
                                        <br>
                    <form method="post" id="gerarpdf_avaliacao" action="areport/index.php" target="_blank">
                        <input type="hidden" name="page" value="pesquisasatisfacao">
                        <input type="hidden" name="tipo" value="satisfacao">
                        <input type="hidden" name="hidden_html" id="hidden_html_satisfacao">
                        <button type="button" name="create_pdf" id="create_pdf_satisfacao" class="btn btn-primary" ="margin: 5px; background-color: #E75125;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Relatório por satisfação</button>
                    </form>
                </div>
            </div>
</body>
</html>