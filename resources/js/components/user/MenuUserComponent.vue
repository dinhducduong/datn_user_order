<template>
  <nav class="menu w-3/4 m-auto">
    <ul class="w-full m-auto">
      <li class="menuItem my-6 rounded-lg" style="background-color: #E93B3B">
        <router-link to="/" class="text-white flex font-semibold text-lg w-full pl-3 py-2 rounded-lg"><img
            src="/images/menu-icon/home.png" alt=""> <span class="pl-2">Trang chủ</span></router-link>
      </li>
      <li class="menuItem my-6 rounded-lg">
        <router-link to="/cart" class="text-white flex font-semibold text-lg pl-3 py-2 rounded-lg"><img
            src="/images/menu-icon/cart.png" alt=""><span class="pl-2">Giỏ hàng</span></router-link>
      </li>
      <li class="menuItem my-6 rounded-lg">
        <router-link to="/order" class="text-white flex font-semibold text-lg pl-3 py-2 rounded-lg"><img
            src="/images/menu-icon/order.png" alt=""><span class="pl-2">Đơn hàng</span></router-link>
      </li>
      <!-- <li class="menuItem my-6 rounded-lg">
        <router-link to="transaction" class="text-white flex font-semibold text-lg pl-3 py-2 rounded-lg"><img
            src="/images/menu-icon/transaction.png" alt=""><span class="pl-2">Giao dịch</span></router-link>
      </li> -->
      <li class=" menuItem  rounded-lg">
        <dropdown imageIcon="/images/menu-icon/transaction.png" class=" text-white  font-semibold text-lg pl-3" title="Giao dịch">
        <li class="mb-2">
          <router-link to="transaction" class="flex text-[16px] text-white"><span class="pl-2">Danh sách Giao dịch</span></router-link>
        </li>
        <li class="mb-2">
          <router-link to="transaction/create">
            <span class="pl-2 text-[16px] text-white">Nạp tiền </span>
          </router-link>
        </li>
      </dropdown>
      </li>
      <li class="menuItem my-6 rounded-lg">
        <router-link to="contact" class="text-white flex font-semibold text-lg pl-3 py-2 rounded-lg"><img
            src="/images/menu-icon/contact.png" alt=""><span class="pl-2">Liên hệ</span></router-link>
      </li>

    </ul>
  </nav>
</template>

<script>
import Dropdown from '../dropdown/DropdownComponent.vue';
export default ({
  data(){
     return {
      
     }
  },
  components: {
    Dropdown
  },
  mounted() {
    const menuItem = document.querySelectorAll(".menuItem")
    menuItem.forEach((e) => {
      e.addEventListener("click", () => {
        menuItem.forEach(e => {
          e.style.backgroundColor = "transparent"
        })
        e.style.backgroundColor = "#E93B3B"
      })
    })
  },
})
</script>




<style scoped>

</style>