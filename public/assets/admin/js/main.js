(()=>{var e={439:()=>{function e(){var e=$("#empreendimento_id").val(),a=$("#getGaleria").val();return $.ajax({url:a,method:"POST",data:{empreendimento_id:e},dataType:"json",success:function(e){$("#galeriaEmpreendimento").html(e)}}),!1}function a(){var e=$("#empreendimento_id").val(),a=$("#getPlantas").val();return $.ajax({url:a,method:"POST",data:{empreendimento_id:e},dataType:"json",success:function(e){$("#plantasEmpreendimento").html(e)}}),!1}$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}}),$(document).on("click","#uploadGaleria",(function(){for(var a=new FormData,t=$("#urlUploadGaleria").val(),o=$("#empreendimento_id").val(),r=$("#images")[0].files.length,n=$("#images")[0],s=0;s<r;s++)a.append("images"+s,n.files[s]);a.append("TotalFiles",r),a.append("empreendimento_id",o),$.ajax({type:"POST",url:t,data:a,cache:!1,contentType:!1,processData:!1,dataType:"json",beforeSend:function(){$("#galeriaEmpreendimento").html('<h5 class="text-center my-4 w-100">Carregando...</h5>')},success:function(a){e(),setTimeout((function(){$(".alert").html(a.success),$(".alert").addClass("alert-success").fadeIn("slow")}),200),setTimeout((function(){$(".alert").hide(400)}),2e3)},error:function(e){setTimeout((function(){$(".alert").html(e.erro),$(".alert").addClass("alert-danger").fadeOut("slow")}),200),setTimeout((function(){$(".alert").hide(400)}),2e3)}})})),$(document).on("click",".delete_image",(function(){var e=$(this).data("id"),a=$(this).data("url");$(".delete").attr("data-id",e),$(".delete").attr("data-url",a),$(".delete").addClass("deleteImage"),$(".deleteImage").removeClass("delete")})),$(document).on("click",".deleteImage",(function(){var a=$(this).data("id"),t=$(this).data("url");$.ajax({url:t,method:"POST",data:{id:a},dataType:"json",cache:!1,success:function(a){$("#modalDelete").modal("toggle"),$(".deleteImage").addClass("delete"),$(".deleteImage").removeData("id"),$(".delete").removeClass("deleteImage"),e(),setTimeout((function(){$(".alert").html(a.success),$(".alert").addClass("alert-success").fadeIn("slow")}),200),setTimeout((function(){$(".alert").hide(400)}),2e3)},error:function(e){setTimeout((function(){$(".alert").html(e.erro),$(".alert").addClass("alert-danger").fadeOut("slow")}),200),setTimeout((function(){$(".alert").hide(400)}),2e3)}})})),$(document).on("click","#uploadPlantas",(function(){for(var e=new FormData,t=$("#urlUploadPlantas").val(),o=$("#empreendimento_id").val(),r=$("#plantas")[0].files.length,n=$("#plantas")[0],s=0;s<r;s++)e.append("plantas"+s,n.files[s]);e.append("TotalFiles",r),e.append("empreendimento_id",o),$.ajax({type:"POST",url:t,data:e,cache:!1,contentType:!1,processData:!1,dataType:"json",beforeSend:function(){$("#galeriaEmpreendimento").html('<h5 class="text-center my-4 w-100">Carregando...</h5>')},success:function(e){a(),setTimeout((function(){$(".alert").html(e.success),$(".alert").addClass("alert-success").fadeIn("slow")}),200),setTimeout((function(){$(".alert").hide(400)}),2e3)},error:function(e){setTimeout((function(){$(".alert").html(e.erro),$(".alert").addClass("alert-danger").fadeOut("slow")}),200),setTimeout((function(){$(".alert").hide(400)}),2e3)}})})),$(document).on("click",".delete_planta",(function(){var e=$(this).data("id"),a=$(this).data("url");$(".delete").attr("data-id",e),$(".delete").attr("data-url",a),$(".delete").addClass("deletePlanta"),$(".deletePlanta").removeClass("delete")})),$(document).on("click",".deletePlanta",(function(){var e=$(this).data("id"),t=$(this).data("url");$.ajax({url:t,method:"POST",data:{id:e},dataType:"json",cache:!1,success:function(e){$("#modalDelete").modal("toggle"),$(".deletePlanta").addClass("delete"),$(".deletePlanta").removeData("id"),$(".delete").removeClass("deletePlanta"),a(),setTimeout((function(){$(".alert").html(e.success),$(".alert").addClass("alert-success").fadeIn("slow")}),200),setTimeout((function(){$(".alert").hide(400)}),2e3)},error:function(e){setTimeout((function(){$(".alert").html(e.erro),$(".alert").addClass("alert-danger").fadeOut("slow")}),200),setTimeout((function(){$(".alert").hide(400)}),2e3)}})}))}},a={};function t(o){var r=a[o];if(void 0!==r)return r.exports;var n=a[o]={exports:{}};return e[o](n,n.exports,t),n.exports}!function(e){"use strict";e.ajaxSetup({headers:{"X-CSRF-TOKEN":e('meta[name="csrf-token"]').attr("content")}}),e(document).on("click",".delete",(function(){var a=e(this).attr("data-id");e("#id").val(a)})),e('[data-toggle="datepicker"]').datepicker({language:"pt-BR"}),e(".money").mask("#.##0,00",{reverse:!0}),e(".cm").mask("##0,00",{reverse:!0}),e(".mes_ano").mask("00/0000"),e(".data").mask("00/00/0000"),e(".telefone").focusout((function(){var a;(a=e(this)).unmask(),a.val().replace(/\D/g,"").length>10?a.mask("(99) 99999-9999"):a.mask("(99) 9999-99999")})).trigger("focusout"),e(".summernote").summernote({lang:"pt-BR",height:300,fontNames:["Noto Sans JP","Signika","Open Sans","Arial"],fontNamesIgnoreCheck:["Nunito","Segoe UI"],fontSizeUnits:["px","pt"],styleTags:["p",{title:"Blockquote",tag:"blockquote",className:"blockquote",value:"blockquote"},"pre","h1","h2","h3","h4","h5","h6"],toolbar:[["style",["style","bold","italic","underline","clear"]],["fontname",["fontname"]],["fontsize",["fontsize"]],["color",["color"]],["para",["ul","ol","paragraph"]],["insert",["ajaximageupload","link","picture","video","table"]],["view",["fullscreen","codeview","help"]]],callbacks:{onImageUpload:function(a){for(var t=0;t<a.length;t++)e.upload(a[t])},onMediaDelete:function(a){!function(a){var t=e(".urlDeleteImageSN").val();e.ajax({data:{src:a},type:"POST",url:t,cache:!1,success:function(e){console.log(e)}})}(a[0].src)}}}),e.upload=function(a){var t=new FormData;t.append("file",a,a.name);var o=e(".urlUploadImageSN").val();e.ajax({method:"POST",url:o,contentType:!1,cache:!1,processData:!1,data:t,success:function(a){e(".summernote").summernote("insertImage",a)},error:function(e,a,t){console.error(a+" "+t)}})},e("#dataTables").dataTable({order:[[0,"desc"]],responsive:!0,language:{emptyTable:"Nenhum registro encontrado",info:"Mostrando de _START_ até _END_ de _TOTAL_ registros",infoEmpty:"Mostrando 0 até 0 de 0 registros",infoFiltered:"(Filtrados de _MAX_ registros)",infoThousands:".",loadingRecords:"Carregando...",processing:"Processando...",zeroRecords:"Nenhum registro encontrado",search:"Pesquisar",paginate:{next:"Próximo",previous:"Anterior",first:"Primeiro",last:"Último"},aria:{sortAscending:": Ordenar colunas de forma ascendente",sortDescending:": Ordenar colunas de forma descendente"},select:{rows:{_:"Selecionado %d linhas",1:"Selecionado 1 linha"},cells:{1:"1 célula selecionada",_:"%d células selecionadas"},columns:{1:"1 coluna selecionada",_:"%d colunas selecionadas"}},buttons:{copySuccess:{1:"Uma linha copiada com sucesso",_:"%d linhas copiadas com sucesso"},collection:'Coleção  <span class="ui-button-icon-primary ui-icon ui-icon-triangle-1-s"></span>',colvis:"Visibilidade da Coluna",colvisRestore:"Restaurar Visibilidade",copy:"Copiar",copyKeys:"Pressione ctrl ou u2318 + C para copiar os dados da tabela para a área de transferência do sistema. Para cancelar, clique nesta mensagem ou pressione Esc..",copyTitle:"Copiar para a Área de Transferência",csv:"CSV",excel:"Excel",pageLength:{"-1":"Mostrar todos os registros",_:"Mostrar %d registros"},pdf:"PDF",print:"Imprimir"},autoFill:{cancel:"Cancelar",fill:"Preencher todas as células com",fillHorizontal:"Preencher células horizontalmente",fillVertical:"Preencher células verticalmente"},lengthMenu:"Exibir _MENU_ resultados por página",searchBuilder:{add:"Adicionar Condição",button:{0:"Construtor de Pesquisa",_:"Construtor de Pesquisa (%d)"},clearAll:"Limpar Tudo",condition:"Condição",conditions:{date:{after:"Depois",before:"Antes",between:"Entre",empty:"Vazio",equals:"Igual",not:"Não",notBetween:"Não Entre",notEmpty:"Não Vazio"},number:{between:"Entre",empty:"Vazio",equals:"Igual",gt:"Maior Que",gte:"Maior ou Igual a",lt:"Menor Que",lte:"Menor ou Igual a",not:"Não",notBetween:"Não Entre",notEmpty:"Não Vazio"},string:{contains:"Contém",empty:"Vazio",endsWith:"Termina Com",equals:"Igual",not:"Não",notEmpty:"Não Vazio",startsWith:"Começa Com"},array:{contains:"Contém",empty:"Vazio",equals:"Igual à",not:"Não",notEmpty:"Não vazio",without:"Não possui"}},data:"Data",deleteTitle:"Excluir regra de filtragem",logicAnd:"E",logicOr:"Ou",title:{0:"Construtor de Pesquisa",_:"Construtor de Pesquisa (%d)"},value:"Valor",leftTitle:"Critérios Externos",rightTitle:"Critérios Internos"},searchPanes:{clearMessage:"Limpar Tudo",collapse:{0:"Painéis de Pesquisa",_:"Painéis de Pesquisa (%d)"},count:"{total}",countFiltered:"{shown} ({total})",emptyPanes:"Nenhum Painel de Pesquisa",loadMessage:"Carregando Painéis de Pesquisa...",title:"Filtros Ativos"},thousands:".",datetime:{previous:"Anterior",next:"Próximo",hours:"Hora",minutes:"Minuto",seconds:"Segundo",amPm:["am","pm"],unknown:"-",months:{0:"Janeiro",1:"Fevereiro",10:"Novembro",11:"Dezembro",2:"Março",3:"Abril",4:"Maio",5:"Junho",6:"Julho",7:"Agosto",8:"Setembro",9:"Outubro"},weekdays:["Domingo","Segunda-feira","Terça-feira","Quarta-feira","Quinte-feira","Sexta-feira","Sábado"]},editor:{close:"Fechar",create:{button:"Novo",submit:"Criar",title:"Criar novo registro"},edit:{button:"Editar",submit:"Atualizar",title:"Editar registro"},error:{system:'Ocorreu um erro no sistema (<a target="\\" rel="nofollow" href="\\">Mais informações</a>).'},multi:{noMulti:"Essa entrada pode ser editada individualmente, mas não como parte do grupo",restore:"Desfazer alterações",title:"Multiplos valores",info:"Os itens selecionados contêm valores diferentes para esta entrada. Para editar e definir todos os itens para esta entrada com o mesmo valor, clique ou toque aqui, caso contrário, eles manterão seus valores individuais."},remove:{button:"Remover",confirm:{_:"Tem certeza que quer deletar %d linhas?",1:"Tem certeza que quer deletar 1 linha?"},submit:"Remover",title:"Remover registro"}},decimal:","}}),e(".owl-carousel").owlCarousel({loop:!0,margin:5,responsiveClass:!0,nav:!1,dots:!0,responsive:{0:{items:1},600:{items:1},1e3:{items:1,loop:!1}}}),e(".select").select2({placeholder:"Selecione uma opção",theme:"classic"});var a=location.href.replace(/\/$/,"");if(location.hash){var o=a.split("#");e('#tabStep a[href="#'+o[1]+'"]').tab("show"),a=location.href.replace(/\/#/,"#"),history.replaceState(null,null,a),setTimeout((function(){e(window).scrollTop(0)}),400)}e('a[data-toggle="tab"]').on("click",(function(){var t,o=e(this).attr("href");t=a.split("#")[0]+o,t+="/",history.replaceState(null,null,t)})),t(439)}(jQuery,window,document)})();