import moduleSwiper from "./module/moduleSwiper.js";
import textareaModule from "./module/textareaModule.js";
import collapseModule from "./module/collapseModule.js";
import menumobileModule from "./module/menumobileModule.js";
import sidebarMenuModule from "./module/sidebarMenuModule.js";
import PopupModule from "./module/PopupModule.js";
import tabModule from "./module/tabModule.js";
import timerModule from "./module/timerModule.js";
import toTopModule from "./module/toTopModule.js";
import SwiperF from "./module/swiper.js";
import Popup from "./module/popup.js";
import ScrollTopModule from "./module/ScrollTopModule.js";
import Circle from "./module/circle.js";
import PointsConnect from "./module/PointsConnect.js";
import Form from "./module/form.js";
import InputFile from "./module/InputFile.js";
import AddAnimation from "./module/AddAnimation.js";
import AosModule from "./module/AosModule.js";
import headerScroll from "./module/headerScroll.js";
import dateModule from "./module/dateModule.js";
import listItemModule from "./module/listItemModule.js"
// import toTopModule from "./module/toTopModule.js"

window.addEventListener("DOMContentLoaded", () => {
  AddAnimation();
  moduleSwiper();
  textareaModule();
  collapseModule();
  menumobileModule();
  sidebarMenuModule();
  PopupModule();
  tabModule();
  timerModule();
  toTopModule();
  SwiperF();
  Popup();
  ScrollTopModule();
  Circle();
  PointsConnect();
  Form();
  InputFile();
  AosModule();
  headerScroll()
  dateModule();
  listItemModule();

  // toTopModule();
});
