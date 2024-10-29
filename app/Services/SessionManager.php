<?php

namespace App\Services;

use App\Constants\SessionConstants;
use App\Dto\CartDto;
use App\Dto\SubscriptionCheckoutDto;

class SessionManager
{
    public function saveSubscriptionCheckoutDto(SubscriptionCheckoutDto $subscriptionCheckoutDto): void
    {
        session()->put(SessionConstants::SUBSCRIPTION_CHECKOUT_DTO, $subscriptionCheckoutDto);
    }

    public function getSubscriptionCheckoutDto(): SubscriptionCheckoutDto
    {
        return session()->get(SessionConstants::SUBSCRIPTION_CHECKOUT_DTO) ?? new SubscriptionCheckoutDto();
    }

    public function resetSubscriptionCheckoutDto(): SubscriptionCheckoutDto
    {
        session()->forget(SessionConstants::SUBSCRIPTION_CHECKOUT_DTO);

        return new SubscriptionCheckoutDto();
    }

    public function getCartDto(): CartDto
    {
        return session()->get(SessionConstants::CART_DTO) ?? new CartDto();
    }

    public function saveCartDto(CartDto $cartDto): void
    {
        session()->put(SessionConstants::CART_DTO, $cartDto);
    }

    public function clearCartDto(): CartDto
    {
        session()->forget(SessionConstants::CART_DTO);

        return new CartDto();
    }
}
