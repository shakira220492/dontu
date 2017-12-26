<?php

namespace BeitechBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use BeitechBundle\Entity\User;
use BeitechBundle\Form\UserType;
use BeitechBundle\Entity\Product;
use BeitechBundle\Form\ProductType;
use BeitechBundle\Entity\Availability;
use BeitechBundle\Form\AvailabilityType;
use BeitechBundle\Entity\Setlist;
use BeitechBundle\Form\SetlistType;
use BeitechBundle\Entity\SetlistDetail;
use BeitechBundle\Form\SetlistDetailType;
use BeitechBundle\Entity\Keyword;
use BeitechBundle\Form\KeywordType;
use BeitechBundle\Entity\ProductKeyword;
use BeitechBundle\Form\ProductKeywordType;
use BeitechBundle\Entity\Visit;
use BeitechBundle\Form\VisitType;
use BeitechBundle\Entity\Login;
use BeitechBundle\Form\LoginType;
use BeitechBundle\Entity\Commentary;
use BeitechBundle\Form\CommentaryType;
use BeitechBundle\Entity\News;
use BeitechBundle\Form\NewsType;
use BeitechBundle\Entity\UserKeyword;
use BeitechBundle\Form\UserKeywordType;

class DefaultController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $userEntity = new User;
        $productEntity = new Product;
        $availabilityEntity = new Availability;
        $setlistEntity = new Setlist;
        $keywordEntity = new Keyword;
        $visitEntity = new Visit;
        $loginEntity = new Login;
        $newsEntity = new News;

        $introduce_user_data_form_ajax = $this->CreateCustomForm(
                new \BeitechBundle\Form\UserType(), $userEntity, 'POST', 'introduce_user_data_form');

        $login_user_data_form_ajax = $this->CreateCustomForm(
                new \BeitechBundle\Form\UserType(), $userEntity, 'POST', 'login_user_data_form');

        $upload_product_form_ajax = $this->CreateCustomForm(
                new \BeitechBundle\Form\ProductType(), $productEntity, 'POST', 'upload_product_form');

        $introduce_setlist_data_form_ajax = $this->CreateCustomForm(
                new \BeitechBundle\Form\SetlistType(), $setlistEntity, 'POST', 'introduce_setlist_data_form');

        $add_product_setlist_form_ajax = $this->CreateCustomForm(
                new \BeitechBundle\Form\ProductType(), $productEntity, 'POST', 'add_product_setlist_form');

        $upload_keywords_form_ajax = $this->CreateCustomForm(
                new \BeitechBundle\Form\KeywordType(), $keywordEntity, 'POST', 'upload_keywords_form');

        $amount_visits_form_ajax = $this->createCustomForm(
                new \BeitechBundle\Form\VisitType(), $visitEntity, 'POST', 'amount_visits_form');

        $increase_amount_view_video_form_ajax = $this->createCustomForm(
                new \BeitechBundle\Form\ProductType(), $productEntity, 'POST', 'increase_amount_view_video_form');

        $update_product_form_ajax = $this->CreateCustomForm(
                new \BeitechBundle\Form\ProductType(), $productEntity, 'POST', 'update_product_form');

        $marketing_and_publicity_form_ajax = $this->CreateCustomForm(
                new \BeitechBundle\Form\ProductType(), $productEntity, 'POST', 'marketing_and_publicity_form');

        $logout_user_data_form_ajax = $this->CreateCustomForm(
                new \BeitechBundle\Form\UserType(), $userEntity, 'POST', 'logout_user_data_form');

        $check_sesion_form_ajax = $this->createCustomForm(
                new \BeitechBundle\Form\LoginType(), $loginEntity, 'POST', 'check_sesion_form');

        $show_videos_by_artist_form_ajax = $this->createCustomForm(
                new \BeitechBundle\Form\ProductType(), $productEntity, 'POST', 'show_videos_by_artist_form');

        $show_videos_by_genre_form_ajax = $this->createCustomForm(
                new \BeitechBundle\Form\ProductType(), $productEntity, 'POST', 'show_videos_by_genre_form');

        $show_videos_by_data_mining_form_ajax = $this->createCustomForm(
                new \BeitechBundle\Form\ProductType(), $productEntity, 'POST', 'show_videos_by_data_mining_form');

        $send_commentary_form_ajax = $this->createCustomForm(
                new \BeitechBundle\Form\ProductType(), $productEntity, 'POST', 'send_commentary_form');

        $send_like_form_ajax = $this->createCustomForm(
                new \BeitechBundle\Form\ProductType(), $productEntity, 'POST', 'send_like_form');

        $send_dislike_form_ajax = $this->createCustomForm(
                new \BeitechBundle\Form\ProductType(), $productEntity, 'POST', 'send_dislike_form');

        $send_like_commentary_form_ajax = $this->createCustomForm(
                new \BeitechBundle\Form\ProductType(), $productEntity, 'POST', 'send_like_commentary_form');
                
        $send_dislike_commentary_form_ajax = $this->createCustomForm(
                new \BeitechBundle\Form\ProductType(), $productEntity, 'POST', 'send_dislike_commentary_form');
        
        $upload_news_form_ajax = $this->createCustomForm(
                new \BeitechBundle\Form\ProductType(), $productEntity, 'POST', 'upload_news_form');
                
        $select_news_form_ajax = $this->createCustomForm(
                new \BeitechBundle\Form\ProductType(), $productEntity, 'POST', 'select_news_form');
        
        return $this->render('BeitechBundle:Default:index.html.twig', array(
                    'introduce_user_data_form_ajax' => $introduce_user_data_form_ajax->createView(),
                    'login_user_data_form_ajax' => $login_user_data_form_ajax->createView(),
                    'upload_product_form_ajax' => $upload_product_form_ajax->createView(),
                    'introduce_setlist_data_form_ajax' => $introduce_setlist_data_form_ajax->createView(),
                    'add_product_setlist_form_ajax' => $add_product_setlist_form_ajax->createView(),
                    'upload_keywords_form_ajax' => $upload_keywords_form_ajax->createView(),
                    'amount_visits_form_ajax' => $amount_visits_form_ajax->createView(),
                    'increase_amount_view_video_form_ajax' => $increase_amount_view_video_form_ajax->createView(),
                    'update_product_form_ajax' => $update_product_form_ajax->createView(),
                    'marketing_and_publicity_form_ajax' => $marketing_and_publicity_form_ajax->createView(),
                    'logout_user_data_form_ajax' => $logout_user_data_form_ajax->createView(),
                    'check_sesion_form_ajax' => $check_sesion_form_ajax->createView(),
                    'show_videos_by_artist_form_ajax' => $show_videos_by_artist_form_ajax->createView(),
                    'show_videos_by_genre_form_ajax' => $show_videos_by_genre_form_ajax->createView(),
                    'show_videos_by_data_mining_form_ajax' => $show_videos_by_data_mining_form_ajax->createView(),
                    'send_commentary_form_ajax' => $send_commentary_form_ajax->createView(),
                    'send_like_form_ajax' => $send_like_form_ajax->createView(),
                    'send_dislike_form_ajax' => $send_dislike_form_ajax->createView(),
                    'send_like_commentary_form_ajax' => $send_like_commentary_form_ajax->createView(),
                    'send_dislike_commentary_form_ajax' => $send_dislike_commentary_form_ajax->createView(),
                    'upload_news_form_ajax' => $upload_news_form_ajax->createView(),
                    'select_news_form_ajax' => $select_news_form_ajax->createView()
//                    'upload_availability_form_ajax' => $upload_availability_form_ajax->createView()
        ));
    }
    
    public function selectNewsFormAction(Request $request){

        $em = $this->getDoctrine()->getManager();
        
        if ($request->isXMLHttpRequest()) {
  
//            $user = $em->getRepository('BeitechBundle:User')->findOneByIdUser(1);
            
            $idUser = 1;
            
            $query = $em->createQuery(
                "SELECT uk.idUserKeyword, u.idUser, k.idKeyword, k.nameKeyword 
                FROM BeitechBundle:UserKeyword uk 
                JOIN BeitechBundle:User u 
                WITH uk.idUser = u.idUser 
                JOIN BeitechBundle:Keyword k 
                WITH uk.idKeyword = k.idKeyword 
                WHERE u.idUser = '$idUser'"
            );
            
            $userKeyword22 = $query->getResult();
            $idUserKeyword22 = $userKeyword22[0]['idUserKeyword'];
            $idUser22 = $userKeyword22[0]['idUser'];
            $idKeyword22 = $userKeyword22[0]['idKeyword'];
            $nameKeyword22 = $userKeyword22[0]['nameKeyword'];
            

            $query2 = $em->createQuery(
                "SELECT n.idNews, n.titleNews, n.imageNews, n.linkNews, n.descriptionNews 
                FROM BeitechBundle:News n 
                JOIN BeitechBundle:NewsKeyword nk 
                WITH nk.idNews = n.idNews 
                JOIN BeitechBundle:Keyword k 
                WITH nk.idKeyword = k.idKeyword 
                WHERE k.nameKeyword = '$nameKeyword22'"
            );
            
            $news = $query2->getResult();
            $idNews = $news[0]['idNews'];
            $titleNews = $news[0]['titleNews'];
            $imageNews = $news[0]['imageNews'];
            $linkNews = $news[0]['linkNews'];
            $descriptionNews = $news[0]['descriptionNews'];
            
//            $news = $em->getRepository('BeitechBundle:News')->findOneByIdNews(1);
//            
//            $idNews = $news->getIdNews();
//            $titleNews = $news->getTitleNews();
//            $imageNews = $news->getImageNews();
//            $linkNews = $news->getLinkNews();
//            $descriptionNews = $news->getDescriptionNews();
            
            $amountLikesCommentary = array();
            
            $amountLikesCommentary[0] = array(
                'id_news' => $idNews,
                'title_news' => $titleNews,
                'image_news' => $imageNews,
                'link_news' => $linkNews,
                'description_news' => $descriptionNews
            );
            
            return new Response(json_encode($amountLikesCommentary), 200, array('Content-Type' => 'application/json'));
        }
    }
    
    public function uploadNewsFormAction(Request $request) {

        $title_news_txt = $_POST['title_news'];
        $image_news_txt = $_POST['image_news'];
        $link_news_txt = $_POST['link_news'];
        $description_news_txt = $_POST['description_news'];
        
        $em = $this->getDoctrine()->getManager();
        
        if ($request->isXMLHttpRequest()) {
           
//            shakira
            
            $user = $em->getRepository('BeitechBundle:User')->findOneByIdUser(1);

            $news = new News();
            $news->setTitleNews($title_news_txt);
            $news->setImageNews($image_news_txt);
            $news->setLinkNews($link_news_txt);
            $news->setDescriptionNews($description_news_txt);
            $news->setIdUser($user);
            
            $em->persist($news);
            $em->flush();
            
            $amountLikesCommentary = array();
            
            $amountLikesCommentary[0] = array(
                'title_news' => $title_news_txt,
                'image_news' => $image_news_txt,
                'link_news' => $link_news_txt,
                'description_news' => $description_news_txt
            );
            
            return new Response(json_encode($amountLikesCommentary), 200, array('Content-Type' => 'application/json'));
        }
    }
        
    public function sendLikeCommentaryFormAction(Request $request) {

        $id_commentary_txt = $_POST['id_commentary'];
        
        $em = $this->getDoctrine()->getManager();
        
        if ($request->isXMLHttpRequest()) {

            // FIND COMMENTARY
            $commentary = $em->getRepository('BeitechBundle:Commentary')->findOneByIdCommentary($id_commentary_txt);
            
            if (!$commentary)
            {
                //NO HAGA NADA
            }
            else
            {
                // Select value of amount likes from the current commentary
                $query = $em->createQuery(
                        "SELECT c.idCommentary, c.amountLikesCommentary 
                        FROM BeitechBundle:Commentary c 
                        WHERE c.idCommentary = '$id_commentary_txt'"
                );
                
                $comments = $query->getResult();
                $amountLikesValue = $comments[0]['amountLikesCommentary'];
                
                // Increase value of amount likes
                $newAmountLikesValue = $amountLikesValue + 1;
                 
                // Update new value of amount likes 
                $commentary->setAmountLikesCommentary($newAmountLikesValue);
                
                $em->persist($commentary);
                $em->flush();
            }
            
            $amountLikesCommentary = array();
            
            $amountLikesCommentary[0] = array(
                'newAmountLikesValue' => $newAmountLikesValue
            );
            
            return new Response(json_encode($amountLikesCommentary), 200, array('Content-Type' => 'application/json'));
        }
    }
        
    public function sendDislikeCommentaryFormAction(Request $request) {

        $id_commentary_txt = $_POST['id_commentary'];
        
        $em = $this->getDoctrine()->getManager();
        
        if ($request->isXMLHttpRequest()) {

            // FIND COMMENTARY
            $commentary = $em->getRepository('BeitechBundle:Commentary')->findOneByIdCommentary($id_commentary_txt);
            
            if (!$commentary)
            {
                //NO HAGA NADA
            }
            else
            {
                // Select value of amount dislikes from the current commentary
                $query = $em->createQuery(
                        "SELECT c.idCommentary, c.amountDislikesCommentary 
                        FROM BeitechBundle:Commentary c 
                        WHERE c.idCommentary = '$id_commentary_txt'"
                );
                
                $comments = $query->getResult();
                $amountDislikesValue = $comments[0]['amountDislikesCommentary'];
                
                // Increase value of amount dislikes
                $newAmountDislikesValue = $amountDislikesValue + 1;
                 
                // Update new value of amount dislikes 
                $commentary->setAmountDislikesCommentary($newAmountDislikesValue);
                
                $em->persist($commentary);
                $em->flush();
            }
            
            $amountDislikesCommentary = array();
            
            $amountDislikesCommentary[0] = array(
                'newAmountDislikesValue' => $newAmountDislikesValue
            );
            
            return new Response(json_encode($amountDislikesCommentary), 200, array('Content-Type' => 'application/json'));
        }
    }
    
    public function sendCommentaryFormAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $id_product_txt = $_POST['id_product'];
        $description_txt = $_POST['description'];
        $status_txt = $_POST['status'];
//        $id_user_txt = $_POST['id_user'];
        $id_user_txt = $_SESSION['loginSession'];
        

        if ($request->isXMLHttpRequest()) {

            // ADD COMMENTARY TO PRODUCT

            $product = $em->getRepository('BeitechBundle:Product')->findOneByIdProduct($id_product_txt);
            $user = $em->getRepository('BeitechBundle:User')->findOneByIdUser($id_user_txt);
            
            $newCommentary = new Commentary();
            $newCommentary->setDescriptionCommentary($description_txt);
            $newCommentary->setIdProduct($product);
            $newCommentary->setIdUser($user);
            $newCommentary->setAmountLikesCommentary(0);
            $newCommentary->setAmountDislikesCommentary(0);

            
            $em->persist($newCommentary);
            $em->flush();

            $id_commentary = $newCommentary->getIdCommentary();
            
            if ($status_txt == "empty") {
                // SELECT MAIN COMMENTS FROM THE PRODUCT
//                $query = $em->createQuery(
//                        "SELECT c.idCommentary, c.descriptionCommentary 
//                        FROM BeitechBundle:Commentary c 
//                        WHERE c.idProduct = '$id_product_txt'"
//                );
                
                $query = $em->createQuery(
                    "SELECT c.idCommentary, c.descriptionCommentary, u.idUser, u.userNameUser 
                    FROM BeitechBundle:Commentary c 
                    JOIN BeitechBundle:User u 
                    WITH c.idUser = u.idUser 
                    JOIN BeitechBundle:Product p 
                    WITH c.idProduct = p.idProduct 
                    WHERE c.idProduct = '$id_product_txt'"
                );
                
            } else {

                // SELECT CURRENT COMMENT FROM THE PRODUCT
//                $query = $em->createQuery(
//                        "SELECT c.idCommentary, c.descriptionCommentary 
//                        FROM BeitechBundle:Commentary c 
//                        WHERE c.idCommentary = '$id_commentary'"
//                );
                
                $query = $em->createQuery(
                    "SELECT c.idCommentary, c.descriptionCommentary, u.idUser, u.userNameUser 
                    FROM BeitechBundle:Commentary c 
                    JOIN BeitechBundle:User u 
                    WITH c.idUser = u.idUser 
                    JOIN BeitechBundle:Product p 
                    WITH c.idProduct = p.idProduct 
                    WHERE c.idCommentary = '$id_commentary'"
                );
                                
                
            }


            $comments = $query->getResult();
            $commentary = array();

            $j = 1;

            $amount = 0;
            $maximum = 1;


            for ($i = 0; $i < $maximum; $i++) {

                if (isset($comments[$i]['idCommentary'])) {
                    $amount++;
                    $maximum++;
                } else {
                    $maximum = 0;
                }
            }

            for ($i = 0; $i < $j; $i++) {

                if (isset($comments[$i]['idCommentary'])) {

                    $j++;
                    $id = $comments[$i]['idCommentary'];
                    $description = $comments[$i]['descriptionCommentary'];
                    $userName = $comments[$i]['userNameUser'];

                    $commentary[$i] = array(
                        'commentary_id' => $id,
                        'commentary_description' => $description,
                        'amount' => $amount,
                        'user_name' => $userName
                    );
                } else {
                    $j = 0;
                }
            }

            return new Response(json_encode($commentary), 200, array('Content-Type' => 'application/json'));
        }
    }

    public function sendLikeFormAction(Request $request) {
//        insert like 

        $em = $this->getDoctrine()->getManager();

//        id_product: id_product, amount: amount

        $id_product_txt = $_POST['id_product'];
        $amount_txt = $_POST['amount'];

        if ($request->isXMLHttpRequest()) {


            $product = $em->getRepository('BeitechBundle:Product')->findOneById($id_product_txt);

            $newCommentary = new Commentary();
            $newCommentary->setDescriptionCommentary($description_txt);
            $newCommentary->setIdProduct($product);

            $em->persist($newCommentary);
            $em->flush();

            $id_commentary = $newCommentary->getIdCommentary();

            // SELECT MAIN COMMENTS FROM THE PRODUCT
            $query = $em->createQuery(
                    "SELECT c.idCommentary, c.descriptionCommentary 
                    FROM BeitechBundle:Commentary c 
                    WHERE c.idCommentary = '$id_commentary'"
            );

            $comments = $query->getResult();
            $commentary = array();

            $j = 1;

            $amount = 0;
            $maximum = 1;


            for ($i = 0; $i < $maximum; $i++) {

                if (isset($comments[$i]['idCommentary'])) {
                    $amount++;
                    $maximum++;
                } else {
                    $maximum = 0;
                }
            }

            for ($i = 0; $i < $j; $i++) {

                if (isset($comments[$i]['idCommentary'])) {

                    $j++;
                    $id = $comments[$i]['idCommentary'];
                    $description = $comments[$i]['descriptionCommentary'];

                    $commentary[$i] = array(
                        'commentary_id' => $id,
                        'commentary_description' => $description,
                        'amount' => $amount
                    );
                } else {
                    $j = 0;
                }
            }

            return new Response(json_encode($commentary), 200, array('Content-Type' => 'application/json'));
        }
    }

    public function sendDislikeFormAction(Request $request) {
//        insert dislike
    }

    public function showVideosByArtistFormAction(Request $request) {

        if ($request->isXMLHttpRequest()) {

            $em = $this->getDoctrine()->getManager();

            if (isset($_SESSION['loginSession'])) {
//                $product_id = $_POST["user_id"];
                $product_id = 1;

                $query = $em->createQuery(
                        "SELECT p.idProduct, p.nameProduct, p.descriptionProduct, p.priceProduct, p.imageProduct, p.videoProduct 
                            FROM BeitechBundle:Product p"
                );

                $users = $query->getResult();
                $products = array();

                $j = 1;

                $amount = 0;
                $maximum = 1;


                for ($i = 0; $i < $maximum; $i++) {

                    if (isset($users[$i]['idProduct'])) {
                        $amount++;
                        $maximum++;
                    } else {
                        $maximum = 0;
                    }
                }

                for ($i = 0; $i < $j; $i++) {

                    if (isset($users[$i]['idProduct'])) {

                        $j++;
                        $id = $users[$i]['idProduct'];
                        $name = $users[$i]['nameProduct'];
                        $description = $users[$i]['descriptionProduct'];
                        $price = $users[$i]['priceProduct'];
                        $image = $users[$i]['imageProduct'];
                        $video = $users[$i]['videoProduct'];

                        $products[$i] = array(
                            'product_id' => $id,
                            'product_name' => $name,
                            'product_description' => $description,
                            'product_price' => $price,
                            'product_image' => $image,
                            'product_video' => $video,
                            'amount' => $amount
                        );
                    } else {
                        $j = 0;
                    }
                }
            } else {

                $product = $em->getRepository('BeitechBundle:Product')->findAll();

                $products = array();

                $products[0] = array(
                    'product_id' => "tu",
                    'product_name' => "me"
                );

                $products[1] = array(
                    'product_id' => "tu2",
                    'product_name' => "me2"
                );
            }
            return new Response(json_encode($products), 200, array('Content-Type' => 'application/json'));
        }
    }

    public function showVideosByDataMiningFormAction(Request $request) {

        if ($request->isXMLHttpRequest()) {

            $em = $this->getDoctrine()->getManager();

            if (isset($_SESSION['loginSession'])) {
//                $product_id = $_POST["user_id"];
                $product_id = 1;

                $query = $em->createQuery(
                        "SELECT p.idProduct, p.nameProduct, p.descriptionProduct, p.priceProduct, p.imageProduct, p.videoProduct 
                            FROM BeitechBundle:Product p"
                );

                $users = $query->getResult();
                $products = array();

                $j = 1;

                $amount = 0;
                $maximum = 1;


                for ($i = 0; $i < $maximum; $i++) {

                    if (isset($users[$i]['idProduct'])) {
                        $amount++;
                        $maximum++;
                    } else {
                        $maximum = 0;
                    }
                }

                for ($i = 0; $i < $j; $i++) {

                    if (isset($users[$i]['idProduct'])) {

                        $j++;
                        $id = $users[$i]['idProduct'];
                        $name = $users[$i]['nameProduct'];
                        $description = $users[$i]['descriptionProduct'];
                        $price = $users[$i]['priceProduct'];
                        $image = $users[$i]['imageProduct'];
                        $video = $users[$i]['videoProduct'];

                        $products[$i] = array(
                            'product_id' => $id,
                            'product_name' => $name,
                            'product_description' => $description,
                            'product_price' => $price,
                            'product_image' => $image,
                            'product_video' => $video,
                            'amount' => $amount
                        );
                    } else {
                        $j = 0;
                    }
                }
            } else {

                $product = $em->getRepository('BeitechBundle:Product')->findAll();

                $products = array();

                $products[0] = array(
                    'product_id' => "tu",
                    'product_name' => "me"
                );

                $products[1] = array(
                    'product_id' => "tu2",
                    'product_name' => "me2"
                );
            }
            return new Response(json_encode($products), 200, array('Content-Type' => 'application/json'));
        }
    }

    public function showVideosByGenreFormAction(Request $request) {

        if ($request->isXMLHttpRequest()) {

            $em = $this->getDoctrine()->getManager();

            if (isset($_SESSION['loginSession'])) {
//                $product_id = $_POST["user_id"];
                $product_id = 1;

                $query = $em->createQuery(
                        "SELECT p.idProduct, p.nameProduct, p.descriptionProduct, p.priceProduct, p.imageProduct, p.videoProduct 
                            FROM BeitechBundle:Product p"
                );

                $users = $query->getResult();
                $products = array();

                $j = 1;

                $amount = 0;
                $maximum = 1;

                for ($i = 0; $i < $maximum; $i++) {

                    if (isset($users[$i]['idProduct'])) {
                        $amount++;
                        $maximum++;
                    } else {
                        $maximum = 0;
                    }
                }

                for ($i = 0; $i < $j; $i++) {

                    if (isset($users[$i]['idProduct'])) {

                        $j++;
                        $id = $users[$i]['idProduct'];
                        $name = $users[$i]['nameProduct'];
                        $description = $users[$i]['descriptionProduct'];
                        $price = $users[$i]['priceProduct'];
                        $image = $users[$i]['imageProduct'];
                        $video = $users[$i]['videoProduct'];

                        $products[$i] = array(
                            'product_id' => $id,
                            'product_name' => $name,
                            'product_description' => $description,
                            'product_price' => $price,
                            'product_image' => $image,
                            'product_video' => $video,
                            'amount' => $amount
                        );
                    } else {
                        $j = 0;
                    }
                }
            } else {

                $product = $em->getRepository('BeitechBundle:Product')->findAll();

                $products = array();

                $products[0] = array(
                    'product_id' => "tu",
                    'product_name' => "me"
                );

                $products[1] = array(
                    'product_id' => "tu2",
                    'product_name' => "me2"
                );
            }
            return new Response(json_encode($products), 200, array('Content-Type' => 'application/json'));
        }
    }

    public function checkSesionFormAction(Request $request) {
        if ($request->isXMLHttpRequest()) {

            if (isset($_SESSION['loginSession'])) {
                // en caso de que exista una sesión
                $users2 = array();
                $users2[] = array(
                    'sessionStatus' => "1",
                    'sessionId' => $_SESSION['loginSession']
                );
            } else {
                // en caso de que no exista una sesión
                $users2 = array();
                $users2[] = array(
                    'sessionStatus' => "0",
                    'sessionId' => "logOut"
                );
            }

            return new Response(json_encode($users2), 200, array('Content-Type' => 'application/json'));
        }
    }

    public function marketingAndPublicityFormAction() {
        return $this->redirectToRoute('beitech_homepage');
    }

    public function reloadLogInAction() {
        return $this->render('BeitechBundle:Default:reloadLogIn.html.twig');
    }

    public function reloadSignUpAction() {
        return $this->render('BeitechBundle:Default:reloadSignUp.html.twig');
    }

    public function introduceUserDataFormAction(Request $request) {
        $user_name = $_POST['user_name'];
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $mobile_number = $_POST["mobile_number"];
        $password = $_POST["password"];
        $birthday = $_POST["birthday"];
        $genre = $_POST["genre"];

        $em = $this->getDoctrine()->getManager();

        if ($request->isXMLHttpRequest()) {
            $user = new User();
            $user->setUserNameUser($user_name);
            $user->setFirstNameUser($first_name);
            $user->setLastNameUser($last_name);
            $user->setMobileNumberUser($mobile_number);
            $user->setPasswordUser($password);
            $user->setBirthdayUser($birthday);
            $user->setGenreUser($genre);

            $em->persist($user);
            $em->flush();

            $response = array();
            $response[] = array(
                'user_id' => $user->getIdUser(),
                'user_user_name' => $user->getUserNameUser(),
                'user_first_name' => $user->getFirstNameUser(),
                'user_last_name' => $user->getLastNameUser(),
                'user_mobile_number' => $user->getMobileNumberUser(),
                'user_password' => $user->getPasswordUser(),
                'user_birthday' => $user->getBirthdayUser(),
                'user_genre' => $user->getGenreUser()
            );
            return new Response(json_encode($response), 200, array('Content-Type' => 'application/json'));
        }
    }

    public function introduceSetlistDataFormAction(Request $request) {
        $delivery_address = $_POST['delivery_address'];
        $user_id = $_POST["user_id"];

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('BeitechBundle:User')->findOneById($user_id);

        if ($request->isXMLHttpRequest()) {
            $setlist = new Setlist();
            $setlist->setIdUser($user);
            $setlist->setDeliveryAddressSetlist($delivery_address);

            $em->persist($setlist);
            $em->flush();

            $response = array();
            $response[] = array(
                'order_id' => $setlist->getIdSetlist(),
                'order_id_user' => $setlist->getIdUser(),
                'order_delivery_address' => $setlist->getDeliveryAddressSetlist()
            );
            return new Response(json_encode($response), 200, array('Content-Type' => 'application/json'));
        }
    }

    public function logoutUserDataFormAction(Request $request) {
        session_destroy();
//        session_start();
        $geolocalization33 = $_SERVER["REMOTE_ADDR"];
        if ($request->isXMLHttpRequest()) {

            $users2 = array();
            $users2[] = array(
                'id' => $geolocalization33,
                'userName' => $geolocalization33
            );
            return new Response(json_encode($users2), 200, array('Content-Type' => 'application/json'));
        }
    }

    public function loginUserDataFormAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $user_name = $_POST['user_name'];
        $password = $_POST["password"];

        $geolocalization33 = $_SERVER["REMOTE_ADDR"];

        if ($request->isXMLHttpRequest()) {

            $user = $em->createQuery(
                "SELECT u.idUser, u.userNameUser 
                FROM BeitechBundle:User u 
                WHERE u.userNameUser = '$user_name' and u.passwordUser = '$password'"
            );

            $users = $user->getResult();

            if (!$users) {
//                vacio
                $users2 = array();
                $users2[] = array(
                    'id' => "0",
                    'userName' => "0"
                );
                return new Response(json_encode($users2), 200, array('Content-Type' => 'application/json'));
            } else {
//                lleno    
//                insertar login de sesion 
                $_SESSION['loginSession'] = $users[0]['idUser'];


                $user = $em->getRepository('BeitechBundle:User')->findOneByIdUser(1);

                $login = new Login();
                $login->setHourLogin("2222");
                $login->setGeolocalizationLogin("6978766");
                $login->setIdUser($user);
                
                

                $em->persist($login);
                $em->flush();

                return new Response(json_encode($users), 200, array('Content-Type' => 'application/json'));
            }
        }
    }

    public function uploadProductFormAction(Request $request) {

        $carpeta = "files/";
        opendir($carpeta);

        $filenameVideo = $_FILES['product_video']['tmp_name'];
        $destinationVideo = $carpeta . $_FILES['product_video']['name'];
        $typeVideo = $_FILES['product_video']['type'];
        if (!$typeVideo == "video/mp4") {
            move_uploaded_file($filenameVideo, $destinationVideo);
        } else {
//            $product_video = "yyy";
            //            ejecutar una acción que le diga al usuario que no se pudo subir el vídeo
        }

        $filenameImage = $_FILES['product_image']['tmp_name'];
        $destinationImage = $carpeta . $_FILES['product_image']['name'];
        $typeImage = $_FILES['product_image']['type'];
        if ($typeImage == "image/jpeg" OR $typeImage == "image/jpg" OR $typeImage == "image/png") {
            move_uploaded_file($filenameImage, $destinationImage);
        } else {
//            $product_image = "xxx";
            //            ejecutar una acción que le diga al usuario que no se pudo subir la imagen
        }
        return $this->redirectToRoute('beitech_homepage');
    }

    public function updateProductFormAction(Request $request) {
        $product_name = $_POST['product_name'];
        $product_description = $_POST["product_description"];
        $product_price = $_POST["product_price"];
        $product_image = $_FILES['product_image']['name'];
        $product_video = $_FILES['product_video']['name'];

        $user_id_login = $_POST["user_id_login"];


        $em = $this->getDoctrine()->getManager();

        if ($request->isXMLHttpRequest()) {
            $user = $em->getRepository('BeitechBundle:User')->findOneById($user_id_login);

            $product = new Product();
            $product->setNameProduct($product_name);
            $product->setDescriptionProduct($product_description);
            $product->setPriceProduct($product_price);
            $product->setImageProduct($product_image);
            $product->setVideoProduct($product_video);
            $product->setAmountViewsProduct(1);
            $product->setIdUser($user);

            $em->persist($product);
            $em->flush();


            $product = $em->getRepository('BeitechBundle:Product')->findOneById($product->getIdProduct());

            $availability = new Availability();
            $availability->setIdUser($user);
            $availability->setIdProduct($product);
            $availability->setStatusAvailability("available");

            $em->persist($availability);
            $em->flush();

            $response = array();
            $response[] = array(
                'product_id' => $product->getIdProduct(),
                'product_name' => $product->getNameProduct(),
                'product_description' => $product->getDescriptionProduct(),
                'product_price' => $product->getPriceProduct(),
                'product_image' => $product->getImageProduct(),
                'product_video' => $product->getVideoProduct()
            );
            return new Response(json_encode($response), 200, array('Content-Type' => 'application/json'));
        }

        return $this->redirectToRoute('beitech_homepage');
    }

    private function createCustomForm($objForm, $objEntity, $method, $route) {
        $form = $this->createForm($objForm, $objEntity, array(
            'action' => $this->generateUrl($route),
            'method' => $method
        ));
        return $form;
    }

    public function reloadListSearchProductAction(Request $request) {
        $keywords_entered_2 = $_POST["keyword"];

        // me retira (espacios en blanco, saltos de linea, etc) que haya al inicio de la variable $keywords_entered
        $keywords_entered_1 = ltrim($keywords_entered_2);

        // me retira (espacios en blanco, saltos de linea, etc) que haya al final de la variable $keywords_entered
        $keywords_entered = rtrim($keywords_entered_1);


        $characters_entered_amount = 0;
        $word_entered = array();
        $temporal_word = "";

        for ($i = 0; $i < strlen($keywords_entered); $i++) {
            //si llegase a existir un espacio entre la frase que se escribió en el buscador,
            //entonces que me ejecute lo siguiente:
            if ($keywords_entered[$i] == " ") {
                $temporal_word = "";
                $previous = $i - 1;

                //si el caracter actual y el caracter anterior son espacios en blanco
                if ($keywords_entered[$previous] == " ") {
                    
                } else {

                    //si el caracter actual es espacio en blanco,
                    //pero el caracter anterior NO es espacio en blanco
                    $characters_entered_amount++;
                }
            } else {
                $temporal_character = $keywords_entered[$i];
                $temporal_word .= $temporal_character;
                $word_entered[$characters_entered_amount] = $temporal_word;
            }
        }

        $em = $this->getDoctrine()->getManager();

        $consulta_2 = "SELECT p.idProduct, p.nameProduct, p.descriptionProduct, p.priceProduct, p.imageProduct, p.videoProduct FROM BeitechBundle:Product p ";
        $consulta_2 .= "JOIN BeitechBundle:ProductKeyword pk ";
        $consulta_2 .= "WITH p.idProduct = pk.idProduct ";
        $consulta_2 .= "JOIN BeitechBundle:Keyword k ";
        $consulta_2 .= "WITH k.idKeyword = pk.idKeyword AND (";
        for ($i = 0; $i <= $characters_entered_amount; $i++) {
            $consulta_2 .= "k.nameKeyword = '" . $word_entered[$i] . "' OR ";
        }
        $consulta_2 .= "k.nameKeyword = '')";

        $product = $em->createQuery(
                $consulta_2
        );

        return $this->render('BeitechBundle:Default:reloadListSearchProduct.html.twig', array(
                    'product' => $product->getResult()
        ));
    }

    public function reloadListOrdersAction(Request $request) {
        $user_id = $_POST["user_id"];

        $em = $this->getDoctrine()->getManager();

        $setlist = $em->createQuery(
                "SELECT s.idSetlist, s.deliveryAddressSetlist 
                FROM BeitechBundle:Setlist s 
                WHERE s.idUser = '$user_id'"
        );

        $setlists = $setlist->getResult();

        return $this->render('BeitechBundle:Default:reloadListOrders.html.twig', array(
                    'setlist' => $setlist->getResult()
        ));
    }

    public function reloadPresentationProductAction(Request $request) {
        $productId = $_POST["productId"];

        $em = $this->getDoctrine()->getManager();

        $product = $em->createQuery(
            "SELECT p.idProduct, p.nameProduct, p.descriptionProduct, p.priceProduct, p.imageProduct, p.videoProduct, p.amountViewsProduct 
            FROM BeitechBundle:Product p
            WHERE p.idProduct = '$productId'"
        );

        return $this->render('BeitechBundle:left_videoProduct:reloadVideoProductForm.html.twig', array(
                    'product' => $product->getResult()
        ));
    }

    public function reloadReviewProductAction() {
        $productId = $_POST["productId"];
        
        $em = $this->getDoctrine()->getManager();

        // CHOOSE PRODUCT THAT USER HAS SELECTED
        $product = $em->createQuery(
            "SELECT p.idProduct, p.nameProduct, p.descriptionProduct, p.priceProduct, p.imageProduct, p.videoProduct, p.amountViewsProduct, p.likesAmountProduct, p.dislikesAmountProduct 
            FROM BeitechBundle:Product p
            WHERE p.idProduct = '$productId'"
        );
        
        return $this->render('BeitechBundle:left_reviewProduct:reloadReviewProductForm.html.twig', array(
                    'product' => $product->getResult()
        ));
    }

    public function reloadLyricsProductAction() {
        $productId = $_POST["productId"];

        $em = $this->getDoctrine()->getManager();

        $product = $em->createQuery(
            "SELECT p.idProduct, p.nameProduct, p.descriptionProduct, p.priceProduct, p.imageProduct, p.videoProduct, p.amountViewsProduct 
            FROM BeitechBundle:Product p
            WHERE p.idProduct = '$productId'"
        );

        return $this->render('BeitechBundle:left_lyricsProduct:reloadLyricsProductForm.html.twig', array(
                    'product' => $product->getResult()
        ));
    }

    public function addProductSetlistFormAction(Request $request) {
        $id_product = $_POST['id_product'];
        $amount_product = $_POST['amount_product'];
        $id_setlist = $_POST['id_setlist'];

        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('BeitechBundle:Product')->findOneById($id_product);
        $setlist = $em->getRepository('BeitechBundle:Setlist')->findOneById($id_setlist);

        if ($request->isXMLHttpRequest()) {

            $setlist222 = $em->getRepository('BeitechBundle:SetlistDetail')->findByIdSetlist($id_setlist);
            $countSetlist = count($setlist222);


            if ($countSetlist < 5) {
                $setlistDetail = new SetlistDetail();
                $setlistDetail->setIdProduct($product);
                $setlistDetail->setAmountProductSetlistDetail($amount_product);
                $setlistDetail->setIdSetlist($setlist);

                $em->persist($setlistDetail);
                $em->flush();

                $response = array();
                $response[] = array(
                    'setlistDetail_id' => $setlistDetail->getIdSetlistDetail(),
                    'setlistDetail_idProduct' => $setlistDetail->getIdProduct(),
                    'setlistDetail_amountProduct' => $setlistDetail->getAmountProductSetlistDetail(),
                    'setlistDetail_idIdSetlist' => $setlistDetail->getIdSetlist(),
                    'contador' => $countSetlist
                );
                return new Response(json_encode($response), 200, array('Content-Type' => 'application/json'));
            } else {
                $setlistDetail = array();
                $setlistDetail[] = array(
                    'setlistDetail_id' => "0",
                    'setlistDetail_idProduct' => "0",
                    'setlistDetail_amountProduct' => "0",
                    'setlistDetail_idSetlist' => "0",
                    'contador' => $countSetlist
                );
                return new Response(json_encode($setlistDetail), 200, array('Content-Type' => 'application/json'));
            }
        }
    }

    public function reloadListProductsAction() {
        $setlist_id = $_POST["setlist_id"];

        $em = $this->getDoctrine()->getManager();

        $setlist = $em->createQuery(
                "SELECT sd.idSetlistDetail, sd.amountProductSetlistDetail, p.nameProduct, p.descriptionProduct, p.priceProduct, s.deliveryAddressSetlist 
                FROM BeitechBundle:SetlistDetail sd 
                JOIN BeitechBundle:Product p
                WITH p.idProduct = sd.idProduct
                JOIN BeitechBundle:Setlist s
                WITH s.idSetlist = sd.idSetlist
                WHERE sd.idSetlist = $setlist_id"
        );

        return $this->render('BeitechBundle:Default:reloadListProducts.html.twig', array(
                    'setlist' => $setlist->getResult()
        ));
    }

    public function uploadKeywordsFormAction(Request $request) {
        $currentKeywordId = $_POST['currentKeywordId'];
        $productId = $_POST['productId'];

        $em = $this->getDoctrine()->getManager();

        if ($request->isXMLHttpRequest()) {
            $currentKeywordIdObject = new Keyword();
            $currentKeywordIdObject->setNameKeyword($currentKeywordId);
            $em->persist($currentKeywordIdObject);
            $em->flush();
            $currentKeywordIdObjectId = $currentKeywordIdObject->getIdKeyword();
            $currentKeywordIdObjectEntity = $em->getRepository('BeitechBundle:Keyword')->findOneById($currentKeywordIdObjectId);

            $productIdEntity = $em->getRepository('BeitechBundle:Product')->findOneById($productId);

            $productcurrentKeywordIdObject = new ProductKeyword();
            $productcurrentKeywordIdObject->setIdKeyword($currentKeywordIdObjectEntity);
            $productcurrentKeywordIdObject->setIdProduct($productIdEntity);
            $em->persist($productcurrentKeywordIdObject);
            $em->flush();

            $response = array();
            $response[] = array(
                'variable' => $currentKeywordIdObjectId
            );
            return new Response(json_encode($response), 200, array('Content-Type' => 'application/json'));
        }
    }

    public function uploadAvailabilityFormAction() {
        
    }

    public function uploadVideoAction() {
        $filename = $_FILES['video']['tmp_name'];
        $destination = $carpeta . $_FILES['video']['name'];

        move_uploaded_file($filename, "files" . $destination);
    }

    public function amountVisitsFormAction(Request $request) {
        $year = date("Y"); //2017
        $month = date("m"); // mes actual del 00 hasta el 12
        $day = date("d"); // dia del mes desde el 01 hasta el 31
        $hour = date("H"); // horas de 00 hasta la 23
        $minute = date("i"); // minutos con ceros iniciales
        $second = date("s"); // segundos con ceros iniciales

        $visit_id = $_POST['id'];
        $visit_hour = $year . "/" . $month . "/" . $day . "-" . $hour . ":" . $minute . ":" . $second;
        $visit_geolocalization = $_SERVER["REMOTE_ADDR"];
        $geolocalization33 = $_SERVER["REMOTE_ADDR"];

        $em = $this->getDoctrine()->getManager();

        if ($request->isXMLHttpRequest()) {
            $visit = new Visit();
            $visit->setHourVisit($visit_hour);
            $visit->setGeolocalizationVisit($visit_geolocalization);

            $em->persist($visit);
            $em->flush();

            $response = array();
            $response[] = array(
                'id' => $visit->getIdVisit(),
                'hour' => $visit->getHourVisit(),
                'geolocalization' => $visit->getGeolocalizationVisit(),
                'geolocalization33' => $geolocalization33
            );
            return new Response(json_encode($response), 200, array('Content-Type' => 'application/json'));
        }
        return $this->redirectToRoute('beitech_homepage');
    }

    public function increaseAmountViewVideoFormAction(Request $request) {
        $product_id = $_POST['id_product'];
        
        if ($request->isXMLHttpRequest()) {

            $em = $this->getDoctrine()->getManager();
            $product = $em->getRepository('BeitechBundle:Product')->find($product_id);
            $amountViews = $product->getAmountViewsProduct();

            if (!$product) {
                throw $this->createNotFoundException(
                        'No product found for the respect id'
                );
            }

            $product->setAmountViewsProduct($amountViews + 1);
            $em->flush();

            $response = array();
            $response[] = array(
                'product_id' => $product_id,
                'product_amountVisits' => $product->getAmountViewsProduct()
            );
            return new Response(json_encode($response), 200, array('Content-Type' => 'application/json'));
        }
        return $this->redirectToRoute('beitech_homepage');
    }

    function reloadListByArtistAction() {

        $setlist_id = 1;

        $em = $this->getDoctrine()->getManager();

        $product = $em->createQuery(
                "SELECT p.idProduct, p.nameProduct, p.descriptionProduct, p.priceProduct, p.imageProduct, p.videoProduct, p.amountViewsProduct, 
                u.userNameUser, u.firstNameUser, u.lastNameUser, u.mobileNumberUser, u.passwordUser, u.birthdayUser, u.genreUser
                FROM BeitechBundle:Product p
                JOIN BeitechBundle:User u
                WITH u.idUser = p.idUser
                WHERE p.idProduct = 1"
        );

        return $this->render('BeitechBundle:List:reloadListByArtist.html.twig', array(
                    'product' => $product->getResult()
        ));
    }

    function reloadListByGenreAction() {
//        $setlist_id = $_POST["setlist_id"];

        $setlist_id = 1;

        $em = $this->getDoctrine()->getManager();

        $setlist = $em->createQuery(
                "SELECT sd.idSetlistDetail, sd.amountProductSetlistDetail, p.nameProduct, p.descriptionProduct, p.priceProduct, s.deliveryAddressSetlist 
                FROM BeitechBundle:SetlistDetail sd
                JOIN BeitechBundle:Product p
                WITH p.idProduct = sd.idProduct
                JOIN BeitechBundle:Setlist s
                WITH s.idSetlist = sd.idSetlist
                WHERE sd.idSetlist = $setlist_id"
        );

        return $this->render('BeitechBundle:List:reloadListByGenre.html.twig', array(
                    'setlist' => $setlist->getResult()
        ));
    }

    function reloadListByDataMiningAction() {
//        $setlist_id = $_POST["setlist_id"];

        $setlist_id = 1;

        $em = $this->getDoctrine()->getManager();

        $setlist = $em->createQuery(
                "SELECT sd.idSetlistDetail, sd.amountProductSetlistDetail, p.nameProduct, p.descriptionProduct, p.priceProduct, s.deliveryAddressSetlist 
                FROM BeitechBundle:SetlistDetail sd
                JOIN BeitechBundle:Product p
                WITH p.idProduct = sd.idProduct
                JOIN BeitechBundle:Setlist s
                WITH s.idSetlist = sd.idSetlist
                WHERE sd.idSetlist = $setlist_id"
        );

        return $this->render('BeitechBundle:List:reloadListByDataMining.html.twig', array(
                    'setlist' => $setlist->getResult()
        ));
    }

    function reloadListByYouAction() {
//        $setlist_id = $_POST["setlist_id"];

        $setlist_id = 1;

        $em = $this->getDoctrine()->getManager();

        $setlist = $em->createQuery(
                "SELECT sd.idSetlistDetail, sd.amountProductSetlistDetail, p.nameProduct, p.descriptionProduct, p.priceProduct, s.deliveryAddressSetlist 
                FROM BeitechBundle:SetlistDetail sd
                JOIN BeitechBundle:Product p
                WITH p.idProduct = sd.idProduct
                JOIN BeitechBundle:Setlist s
                WITH s.idSetlist = sd.idSetlist
                WHERE sd.idSetlist = $setlist_id"
        );

        return $this->render('BeitechBundle:List:reloadListByYou.html.twig', array(
                    'setlist' => $setlist->getResult()
        ));

        /*

          //        METODO DOS

          //si llegase a existir un espacio entre la frase que se escribió en el buscador,
          //entonces que me ejecute lo siguiente:
          if ($keywords_entered[$i] == " ") {
          $temporal_word = "";
          $previous = $i - 1;

          //si el caracter actual y el caracter anterior son espacios en blanco
          if ($keywords_entered[$previous] == " ") {

          } else {

          //si el caracter actual es espacio en blanco,
          //pero el caracter anterior NO es espacio en blanco
          $characters_entered_amount++;
          }
          } else {
          $temporal_character = $keywords_entered[$i];
          $temporal_word .= $temporal_character;
          $word_entered[$characters_entered_amount] = $temporal_word;
          }
          }

          $em = $this->getDoctrine()->getManager();

          $consulta_2 = "SELECT p.id, p.name, p.description, p.price, p.image, p.video FROM BeitechBundle:Product p ";
          $consulta_2 .= "JOIN BeitechBundle:ProductKeyword pk ";
          $consulta_2 .= "WITH p.id = pk.idProduct ";
          $consulta_2 .= "JOIN BeitechBundle:Keyword k ";
          $consulta_2 .= "WITH k.id = pk.idKeyword AND (";
          for ($i = 0; $i <= $characters_entered_amount; $i++) {
          $consulta_2 .= "k.name = '" . $word_entered[$i] . "' OR ";
          }
          $consulta_2 .= "k.name = '')";

          $product = $em->createQuery(
          $consulta_2
          );

          return $this->render('BeitechBundle:Default:reloadListSearchProduct.html.twig', array(
          'product' => $product->getResult()
          ));

         */
    }

}
