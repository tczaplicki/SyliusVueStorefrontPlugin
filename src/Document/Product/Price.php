<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace BitBag\SyliusVueStorefrontPlugin\Document\Product;

final class Price
{
    private const FINAL_PRICE = 'final_price';
    private const PRICE = 'price';
    private const MINIMAL_PRICE = 'minimal_price';
    private const MAXIMAL_PRICE = 'max_price';
    private const PRICE_TAX = 'priceTax';
    private const PRICE_INCLUDING_TAX = 'priceInclTax';
    private const REGULAR_PRICE = 'regular_price';
    private const MINIMAL_REGULAR_PRICE = 'minimal_regular_price';
    private const MAXIMAL_REGULAR_PRICE = 'max_regular_price';
    private const SPECIAL_PRICE = 'special_price';
    private const SPECIAL_PRICE_TAX = 'specialPriceTax';
    private const SPECIAL_PRICE_INCLUDING_TAX = 'specialPriceInclTax';
    private const ORIGINAL_PRICE = 'originalPrice';
    private const OPRIGINAL_PRICE_TAX = 'originalPriceTax';
    private const OPRIGINAL_PRICE_INCLUDING_TAX = 'originalPriceInclTax';

    /** @var float|null */
    private $finalPrice;

    /** @var float|null */
    private $price;

    /** @var float|null */
    private $minimalPrice;

    /** @var float|null */
    private $maximalPrice;

    /** @var float|null */
    private $priceTax;

    /** @var float|null */
    private $priceIncludingTax;

    /** @var float|null */
    private $regularPrice;

    /** @var float|null */
    private $minimalRegularPrice;

    /** @var float|null */
    private $maximalRegularPrice;

    /** @var float|null */
    private $specialPrice;

    /** @var float|null */
    private $specialPriceTax;

    /** @var float|null */
    private $specialPriceIncludingTax;

    /** @var float|null */
    private $originalPrice;

    /** @var float|null */
    private $originalPriceTax;

    /** @var float|null */
    private $originalPriceInludingTax;

    public function __construct(
//        ?float $finalPrice,
//        ?float $price,
//        ?float $minimalPrice,
//        ?float $maximalPrice,
//        ?float $priceTax,
//        ?float $priceIncludingTax,
//        ?float $regularPrice,
//        ?float $minimalRegularPrice,
//        ?float $maximalRegularPrice,
//        ?float $specialPrice,
//        ?float $specialPriceTax,
//        ?float $specialPriceIncludingTax,
//        ?float $originalPrice,
//        ?float $originalPriceTax,
//        ?float $originalPriceInludingTax
    ) {
//        $this->finalPrice = $finalPrice;
//        $this->price = $price;
//        $this->minimalPrice = $minimalPrice;
//        $this->maximalPrice = $maximalPrice;
//        $this->priceTax = $priceTax;
//        $this->priceIncludingTax = $priceIncludingTax;
//        $this->regularPrice = $regularPrice;
//        $this->minimalRegularPrice = $minimalRegularPrice;
//        $this->maximalRegularPrice = $maximalRegularPrice;
//        $this->specialPrice = $specialPrice;
//        $this->specialPriceTax = $specialPriceTax;
//        $this->specialPriceIncludingTax = $specialPriceIncludingTax;
//        $this->originalPrice = $originalPrice;
//        $this->originalPriceTax = $originalPriceTax;
//        $this->originalPriceInludingTax = $originalPriceInludingTax;
    }


    public function toArray(): array
    {
        return [
            self::FINAL_PRICE => $this->finalPrice,
            self::PRICE => $this->price,
            self::MINIMAL_PRICE => $this->minimalPrice,
            self::MAXIMAL_PRICE => $this->maximalPrice,
            self::PRICE_TAX => $this->priceTax,
            self::PRICE_INCLUDING_TAX => $this->priceIncludingTax,
            self::REGULAR_PRICE => $this->regularPrice,
            self::MINIMAL_REGULAR_PRICE => $this->minimalRegularPrice,
            self::MAXIMAL_REGULAR_PRICE => $this->maximalRegularPrice,
            self::SPECIAL_PRICE => $this->specialPrice,
            self::SPECIAL_PRICE_TAX => $this->specialPriceTax,
            self::SPECIAL_PRICE_INCLUDING_TAX => $this->specialPriceIncludingTax,
            self::ORIGINAL_PRICE => $this->originalPrice,
            self::OPRIGINAL_PRICE_TAX => $this->originalPriceTax,
            self::OPRIGINAL_PRICE_INCLUDING_TAX => $this->originalPriceInludingTax,
        ];
    }
}