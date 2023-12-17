<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <title>Registro de Atendimento ao Discente</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="forms-registro">
    <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class="flex bg-[#11581c] text-white font-medium justify-between items-center p-2">
        <div class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="47" height="56" viewBox="0 0 47 56" fill="none">
            <path d="M27.9632 14.0828C27.9632 14.5496 27.6466 14.9261 27.2548 14.9261H21.3925C21.0013 14.9261 20.6841 14.5496 20.6841 14.0828V7.09632C20.6841 6.63181 21.0013 6.25305 21.3925 6.25305H27.2548C27.6466 6.25305 27.9632 6.63181 27.9632 7.09632V14.0828Z" fill="#35972F" />
            <path d="M36.6994 14.0828C36.6994 14.5496 36.3815 14.9261 35.991 14.9261H30.1273C29.7375 14.9261 29.4189 14.5496 29.4189 14.0828V7.09632C29.4189 6.63181 29.7375 6.25305 30.1273 6.25305H35.991C36.3815 6.25305 36.6994 6.63181 36.6994 7.09632V14.0828Z" fill="#35972F" />
            <path d="M36.6994 34.8981C36.6994 35.3642 36.3815 35.7422 35.991 35.7422H30.1273C29.7375 35.7422 29.4189 35.3642 29.4189 34.8981V27.914C29.4189 27.4463 29.7375 27.0676 30.1273 27.0676H35.991C36.3815 27.0676 36.6994 27.4463 36.6994 27.914V34.8981Z" fill="#35972F" />
            <path d="M19.2296 24.4834C19.2296 24.9502 18.9117 25.3282 18.5199 25.3282H12.6576C12.2664 25.3282 11.9492 24.9502 11.9492 24.4834V17.4985C11.9492 17.0316 12.2664 16.6544 12.6576 16.6544H18.5199C18.9117 16.6544 19.2296 17.0316 19.2296 17.4985V24.4834Z" fill="#35972F" />
            <path d="M27.9632 24.4834C27.9632 24.9502 27.6466 25.3282 27.2548 25.3282H21.3925C21.0013 25.3282 20.6841 24.9502 20.6841 24.4834V17.4985C20.6841 17.0316 21.0013 16.6544 21.3925 16.6544H27.2548C27.6466 16.6544 27.9632 17.0316 27.9632 17.4985V24.4834Z" fill="#35972F" />
            <path d="M19.2296 34.8981C19.2296 35.3642 18.9117 35.7422 18.5199 35.7422H12.6576C12.2664 35.7422 11.9492 35.3642 11.9492 34.8981V27.914C11.9492 27.4463 12.2664 27.0676 12.6576 27.0676H18.5199C18.9117 27.0676 19.2296 27.4463 19.2296 27.914V34.8981Z" fill="#35972F" />
            <path d="M27.9632 34.8981C27.9632 35.3642 27.6466 35.7422 27.2548 35.7422H21.3925C21.0013 35.7422 20.6841 35.3642 20.6841 34.8981V27.914C20.6841 27.4463 21.0013 27.0676 21.3925 27.0676H27.2548C27.6466 27.0676 27.9632 27.4463 27.9632 27.914V34.8981Z" fill="#35972F" />
            <path d="M19.2296 45.3161C19.2296 45.783 18.9117 46.1609 18.5199 46.1609H12.6576C12.2664 46.1609 11.9492 45.783 11.9492 45.3161V38.332C11.9492 37.8659 12.2664 37.4872 12.6576 37.4872H18.5199C18.9117 37.4872 19.2296 37.8659 19.2296 38.332V45.3161Z" fill="#35972F" />
            <path d="M27.9632 45.3161C27.9632 45.783 27.6466 46.1609 27.2548 46.1609H21.3925C21.0013 46.1609 20.6841 45.783 20.6841 45.3161V38.332C20.6841 37.8659 21.0013 37.4872 21.3925 37.4872H27.2548C27.6466 37.4872 27.9632 37.8659 27.9632 38.332V45.3161Z" fill="#35972F" />
            <path d="M19.592 10.5903C19.592 13.2245 17.8002 15.3601 15.5894 15.3601C13.3786 15.3601 11.5869 13.2245 11.5869 10.5903C11.5869 7.95468 13.3786 5.81909 15.5894 5.81909C17.8002 5.81909 19.592 7.95468 19.592 10.5903Z" fill="#C80B0F" />
          </svg>
          <div class="text-wrapper-3">ASPE.IFPE</div>
        </div>
        <a href="home.php" class="text-wrapper-2">Home</a>
        <button class="div">Relatórios</button>
        <div class="flex">
          <div class="flex gap-4 items-center">
            <div class="flex items-center gap-2">
              <div class="bg-[#ffffff] rounded-[50%] w-[30px] h-[30px] flex justify-center items-center text-black">A</div>
              <div class="perfil-XXXXXXXXXXX">Perfil (Admin)</div>
            </div>
            <button class="text-wrapper">Sair</button>
          </div>
        </div>
      </div>

      <div class="p-12 flex flex-col gap-8">
        <p class="text-[28px] font-medium text-[rgba(63, 63, 63, 0.87)]">Vizualizar Registro</p>
        <div class="flex flex-wrap gap-4">
          <div class="flex flex-col gap-2">
            <div class="text-wrapper-12">Nome do Discente:</div>
            <input type="text" name="nome_discente" class="p-2 bg-[#e8f0fe] rounded-md border border-black">
          </div>
          <div class="flex flex-col gap-2">
            <div class="text-wrapper-11">Matrícula:</div>
            <input type="text" name="matricula" class="p-2 bg-[#e8f0fe] rounded-md border border-black">
          </div>
          <div class="flex flex-col gap-2">
            <div class="text-wrapper-10">Curso:</div>
            <input type="text" name="curso" class="p-2 bg-[#e8f0fe] rounded-md border border-black">
          </div>
          <div class="flex flex-col gap-2">
            <div class="text-wrapper-9">Data da Solicitação:</div>
            <input type="text" name="data_solicitacao" class="p-2 bg-[#e8f0fe] rounded-md border border-black">
          </div>
          <div class="flex flex-col gap-2">
            <div class="text-wrapper-8">Solicitante:</div>
            <input type="text" name="solicitante" class="p-2 bg-[#e8f0fe] rounded-md border border-black">
          </div>
          <div class="flex flex-col gap-2">
            <div class="text-wrapper-7">Setor Solicitante:</div>
            <input type="text" name="setor_solicitante" class="p-2 bg-[#e8f0fe] rounded-md border border-black">
          </div>
          <div class="flex flex-col gap-2">
            <div class="text-wrapper-6">Período:</div>
            <input type="text" name="periodo" class="p-2 bg-[#e8f0fe] rounded-md border border-black">
          </div>
          <div class="flex flex-col gap-2">
            <div class="text-wrapper-5">Modalidade:</div>
            <input type="text" name="modalidade" class="p-2 bg-[#e8f0fe] rounded-md border border-black">
          </div>
          <div class="flex flex-col gap-2">
            <div class="text-wrapper-4">Ano:</div>
            <input type="text" name="ano" class="p-2 bg-[#e8f0fe] rounded-md border border-black">
          </div>
        </div>

        <div class="flex flex-col gap-8 ">
          <div class="flex flex-col gap-2">
            <div class="text-wrapper-3">Relato da Solicitação:</div>
            <textarea name="relato_solicitacao" id="relato" cols="30" rows="10" class="p-2 bg-[#e8f0fe] rounded-md border border-black"></textarea>
          </div>
          <div class="flex flex-col gap-2">
            <div class="text-wrapper-2">Atendimento da Assessoria Pedagógica:</div>
            <textarea name="atendimento_assessoria" id="assessoria" cols="30" rows="10" class="p-2 bg-[#e8f0fe] rounded-md border border-black"></textarea>
          </div>
          <div class="flex flex-col gap-2">
            <div class="div">Encaminhamentos:</div>
            <textarea name="encaminhamentos" id="encaminhamentos" cols="30" rows="10" class="p-2 bg-[#e8f0fe] rounded-md border border-black"></textarea>
          </div>
        </div>

        <div class="flex justify-end mt-2">
          <button type="submit" class="p-4 bg-[#35972f] text-white rounded-md hover:opacity-[0.8]">Registrar Atendimento</button>
        </div>
      </div>
    </form>

  </div>
</body>

</html>