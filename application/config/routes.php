<?php defined('BASEPATH') OR exit('No direct script access allowed');$route['default_controller'] = 'Home_Controller';$route['404_override'] = '';$route['translate_uri_dashes'] = FALSE;/*front-end*/$route['sobre'] = "Sobre_Controller/index"; $route['chales'] = "chales/index";$route['chale/(:num)/(:any)'] = "chale/index/$1/$2";/*painel*//*VER*/$route['admin'] = "admin/Home_Controller/index";$route['admin/login'] = "admin/usuarios/pag_login";$route['admin/categoria'] = "admin/Categoria_Controller/index";$route['admin/usuarios'] = "admin/Usuarios_Controller/index";$route['admin/slide'] = "admin/Slide_Controller/index";$route['admin/textos/(:num)'] = "admin/Texto_Controller/index/$1";$route['admin/imagem/(:num)'] = "admin/Imagem_Controller/index/$1";/*inserir*/$route['admin/categoria/inserir'] = "admin/Categoria_Controller/inserir";$route['admin/usuarios/inserir'] = "admin/Usuarios_Controller/inserir";$route['admin/slide/inserir'] = "admin/Slide_Controller/inserir";$route['admin/texto/inserir/(:any)'] = "admin/Texto_Controller/inserir/$1";$route['admin/texto/inserir'] = "admin/Texto_Controller/inserir";$route['admin/imagem/inserir/(:any)'] = "admin/Imagem_Controller/inserir/$1";$route['admin/imagem/inserir'] = "admin/Imagem_Controller/inserir";/*editar*/$route['admin/categoria/editar/(:any)'] = "admin/Categoria_Controller/editar/$1";$route['admin/usuarios/editar/(:any)'] = "admin/Usuarios_Controller/editar/$1";$route['admin/slide/editar/(:any)'] = "admin/Slide_Controller/editar/$1";$route['admin/texto/editar/(:any)'] = "admin/Texto_Controller/editar/$1";$route['admin/imagem/editar/(:any)'] = "admin/Imagem_Controller/editar/$1";/*salvar cadastro*/$route['admin/categoria/cadastrar'] = "admin/Categoria_Controller/cadastrar";$route['admin/usuarios/cadastrar'] = "admin/Usuarios_Controller/cadastrar";$route['admin/slide/cadastrar'] = "admin/Slide_Controller/cadastrar";$route['admin/texto/cadastrar/(:any)'] = "admin/Texto_Controller/cadastrar/$1";$route['admin/texto/cadastrar'] = "admin/Texto_Controller/cadastrar";$route['admin/imagem/cadastrar/(:any)'] = "admin/Imagem_Controller/cadastrar/$1";$route['admin/imagem/cadastrar'] = "admin/Imagem_Controller/cadastrar";/*salvar alterações*/$route['admin/categoria/salvar_alteracoes'] = "admin/Categoria_Controller/salvar_alteracoes";$route['admin/usuarios/salvar_alteracoes'] = "admin/Usuarios_Controller/salvar_alteracoes";$route['admin/slide/salvar_alteracoes'] = "admin/Slide_Controller/salvar_alteracoes";$route['admin/texto/salvar_alteracoes/(:any)'] = "admin/Texto_Controller/salvar_alteracoes/$1";$route['admin/texto/salvar_alteracoes'] = "admin/Texto_Controller/salvar_alteracoes";$route['admin/imagem/salvar_alteracoes/(:any)'] = "admin/Imagem_Controller/salvar_alteracoes/$1";$route['admin/imagem/salvar_alteracoes'] = "admin/Imagem_Controller/salvar_alteracoes";/*excluir*/$route['admin/categoria/excluir'] = "admin/Categoria_Controller/excluir";$route['admin/usuarios/excluir'] = "admin/Usuarios_Controller/excluir";$route['admin/slide/excluir'] = "admin/Slide_Controller/excluir";$route['admin/textos/excluir/(:any)'] = "admin/Texto_Controller/excluir/$1";$route['admin/textos/excluir'] = "admin/Texto_Controller/excluir";$route['admin/imagem/excluir/(:any)'] = "admin/Imagem_Controller/excluir/$1";$route['admin/imagem/excluir'] = "admin/Imagem_Controller/excluir";