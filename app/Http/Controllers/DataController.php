<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Client;

class DataController extends Controller
{
    public function index(Request $request){
      if(Auth::Check()){
        $user = Auth::user();
        if(Client::where('user_id',$user->id)->exists()){
          $data = Client::where('user_id',$user->id)->first();
          $ft_key = $data->FUTURE_API_KEY;
          $ft_secret = $data->FUTURE_API_SECRET;
          $ft_buy = $data->FUTURE_BUY_PERCENT;
          $ft_sell = $data->FUTURE_SELL_PERCENT;
          $ft_stop = $data->FUTURE_STOP_PRICE_PERCENT;
          $ft_usdt = $data->FUTURE_DEFAULT_USDT;
          $sp_key = $data->SPOT_API_KEY;
          $sp_secret = $data->SPOT_API_SECRET;
          $sp_buy = $data->SPOT_BUY_PERCENT;
          $sp_sell = $data->SPOT_SELL_PERCENT;
          $sp_stop = $data->SPOT_STOP_PRICE_PERCENT;
          $sp_stoplimit = $data->SPOT_STOPLIMIT_PRICE_PERCENT;
          $sp_usdt = $data->SPOT_DEFAULT_USDT;
          return view('index-submitted',compact('ft_key','ft_secret','ft_buy','ft_sell','ft_stop','ft_usdt','sp_key','sp_secret','sp_buy','sp_sell','sp_stop','sp_stoplimit','sp_usdt'));
        }
        else {
          $data = new Client;
          $data->FUTURE_API_KEY = $request->futures_key;
          $data->FUTURE_API_SECRET = $request->futures_secret;
          $data->FUTURE_BUY_PERCENT	= $request->futures_buy;
          $data->FUTURE_SELL_PERCENT = $request->futures_sell;
          $data->FUTURE_STOP_PRICE_PERCENT = $request->futures_stop;
          $data->FUTURE_DEFAULT_USDT	= $request->futures_usdt;
          $data->SPOT_API_KEY = $request->spot_key;
          $data->SPOT_API_SECRET	= $request->spot_secret;
          $data->SPOT_BUY_PERCENT	= $request->spot_buy;
          $data->SPOT_SELL_PERCENT = $request->spot_sell;
          $data->SPOT_STOP_PRICE_PERCENT = $request->spot_stop;
          $data->SPOT_STOPLIMIT_PRICE_PERCENT = $request->spot_stoplimit;
          $data->SPOT_DEFAULT_USDT = $request->spot_usdt;
          $data->user_id = $user->id;
          $data->save();
          return redirect('/');
        }
      }
      else {
        return view('auth.login');
      }

    }

    public function update(Request $request){
      $user = Auth::user();
      $data = Client::where('user_id', $user->id)->first();
      $data->FUTURE_API_KEY = $request->futures_key;
      $data->FUTURE_API_SECRET = $request->futures_secret;
      $data->FUTURE_BUY_PERCENT	= $request->futures_buy;
      $data->FUTURE_SELL_PERCENT = $request->futures_sell;
      $data->FUTURE_STOP_PRICE_PERCENT = $request->futures_stop;
      $data->FUTURE_DEFAULT_USDT	= $request->futures_usdt;
      $data->SPOT_API_KEY = $request->spot_key;
      $data->SPOT_API_SECRET	= $request->spot_secret;
      $data->SPOT_BUY_PERCENT	= $request->spot_buy;
      $data->SPOT_SELL_PERCENT = $request->spot_sell;
      $data->SPOT_STOP_PRICE_PERCENT = $request->spot_stop;
      $data->SPOT_STOPLIMIT_PRICE_PERCENT = $request->spot_stoplimit;
      $data->SPOT_DEFAULT_USDT = $request->spot_usdt;
      $data->user_id = $user->id;
      $data->save();
      return redirect('/');
    }
}
