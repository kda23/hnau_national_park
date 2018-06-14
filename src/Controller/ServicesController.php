<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Repository\CategoriesRepository;
use App\Repository\ProductRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use App\Entity\Categories;
use App\Entity\Product;
use Symfony\Component\HttpFoundation\Response;


class ServicesController extends Controller
{
    /**
     * @Route("/services", name="services")
     */
    public function index(CategoriesRepository $categoriesRepository)
    {
        $categories = $categoriesRepository->findAll();

        return $this->render('services/services.html.twig', compact('categories'));
    }

//    /**
//     * @Route("services/{category_id}")
//     * @ParamConverter("id", options={"mapping": {"category_id" : "id"}})
//     */
//    public function category(Categories $id)
//    {
//        $category = $this->getDoctrine()
//            ->getRepository(Categories::class)
//            ->find($id);
//
//        $products = $category->getProducts();
//
//        if (!$products) {
//            throw $this->createNotFoundException();
//        }
//
//        return $this->render('services/categories.html.twig', [
//            'products' => $products,
//        ]);
//    }

    /**
     * @Route("/{categorySlug}")
     * @ParamConverter("category", options={"mapping": {"categorySlug" : "slug"}})
     */
    public function category(Categories $category)
    {
        $products = $category->getProducts();

        return $this->render('services/categories.html.twig', [
            'category' => $category,
            'products' => $products,
        ]);
    }

    /**
     * @Route("/{categorySlug}/{productSlug}")
     * @ParamConverter("category", options={"mapping": {"categorySlug": "slug"}})
     * @ParamConverter("product", options={"mapping": {"productSlug": "slug"}})
     */
    public function product(Categories $category, Product $product)
    {
        return $this->render('services/product.html.twig', [
            'category' => $category,
            'product' => $product,
        ]);
    }
}
