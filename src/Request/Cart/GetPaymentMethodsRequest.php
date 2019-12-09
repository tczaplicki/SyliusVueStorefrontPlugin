<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusVueStorefrontPlugin\Request\Cart;

use Symfony\Component\HttpFoundation\Request;

final class GetPaymentMethodsRequest
{
    /** @var string|null */
    private $token;

    /** @var string */
    private $cartId;

    public function __construct(Request $request)
    {
        $this->token = $request->query->get('token');
        $this->cartId = $request->query->get('cartId') ?? '99r1zBmvap';
    }

    public static function fromHttpRequest(Request $request): self
    {
        return new self($request);
    }

    public function getCartId(): string
    {
        return $this->cartId;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }
}
